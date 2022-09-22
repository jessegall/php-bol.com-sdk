const fs = require('fs');
const pluralize = require('pluralize');
const path = require("path");

String.prototype.ucfirst = function () {
    return this.charAt(0).toUpperCase() + this.slice(1);
};

String.prototype.pluralize = function () {
    return pluralize.plural(this);
}

String.prototype.singular = function () {
    return pluralize.singluar(this);
}

String.prototype.snake = function () {
    return this.split(/(?=[A-Z])/).join('_').toLowerCase();
}

String.prototype.kebab = function () {
    return this.split(/(?=[A-Z])/).join('-').toLowerCase();
}

const definitions = getDefinitions();
const names = Object.keys(definitions);
const paths = getPaths();

for (const [name, config] of Object.entries(definitions)) {
    const phpClass = createPhpClass(name, config);
    fs.writeFileSync(`${ __dirname }/generated/${ name.ucfirst() }.php`, phpClass);
}

function getDefinitions() {
    return JSON.parse(fs.readFileSync(`${ __dirname }/../api.json`, "utf-8")).definitions;
}

function getPaths() {
    return JSON.parse(fs.readFileSync(`${ __dirname }/../api.json`, "utf-8")).paths;
}

function createPhpClass(name, config) {
    config._type = name.endsWith('Request') ? 'request' : name.endsWith('Response') ? 'response' : 'resource';

    const stub = getStub(config._type);

    const methods = [];

    for (const [name, property] of Object.entries(config.properties)) {
        setupPHPType(property);

        methods.push(
            createGetMethod(name, property),
            createSetMethod(name, property),
        )
    }

    const endpoint = findEndpoint(name, config);

    if (! endpoint) {
        console.log(name);
    }

    return stub
        .replaceAll('{{ class }}', name.ucfirst())
        .replaceAll('{{ description }}', config.description ? `\n* ${ config.description }` : '')
        .replaceAll('{{ endpoint }}', endpoint ? `'${ findEndpoint(name, config) }'` : null)
        .replaceAll('{{ endpointMethods }}', Object.keys(paths[endpoint] || {}).join("' , '"))
        .replaceAll('{{ bolComResource }}', name)
        .replaceAll('{{ response }}', findResponse(name, config))
        .replaceAll('{{ methods }}', methods.join("\n"));
}

function getStub(type) {
    return fs.readFileSync(`${ __dirname }/stubs/${ type }.stub`, 'utf-8');
}

function setupPHPType(property) {
    function isInt(n) {
        return Number(n) === n && n % 1 === 0;
    }

    switch (property.type) {
        case 'string':
            property.type = 'string'
            return;

        case 'number':
            property.type = isInt(property.example) ? 'int' : 'float';
            return;

        case 'integer':
            property.type = 'int';
            return;

        case 'boolean':
            property.type = 'bool';
            return;

        case 'array': {
            const ref = property.items.$ref;
            if (ref) {
                property.relation = true;
                [property.generic] = ref.split('/').reverse();
            }
            property.type = ref ? 'ResourceCollection' : 'array';
            return;
        }

        case undefined: {
            const ref = property.$ref;
            property.relation = true;
            [property.type] = ref.split('/').reverse();
        }
    }
}

function createGetMethod(name, property) {
    const docs = `
    /**
    ${ property.description ? `* ${ property.description } \n*` : '' }
    * @return ${ property.type }${ property.generic ? `<${ property.generic }>` : '' }|null
    */`

    const type = property.type !== 'bool' ? `${ property.type }` : property.type;

    const method = createMethod(`get${ name.ucfirst() }`, {}, `?${ type }`,
        property.relation
            ? `return $this->relation('${ name }', ${ type }::class${ property.generic ? ',true' : '' });`
            : `return $this->get('${ name }');`
    )

    return docs + method;
}

function createSetMethod(name, property) {
    const docs = `
    /**
     * @param ${ property.type }${ property.generic ? `<${ property.generic }>` : '' }|null $${ name }
     * @return $this
     */`

    const argument = property.type !== 'bool' ? `${ name } = null` : name;

    const method = createMethod(`set${ name.ucfirst() }`, { [property.type]: argument }, 'static',
        `return $this->set('${ name }', $${ name });`
    )

    return docs + method;
}

function createMethod(name, arguments, returnType, inner) {
    arguments = Object.entries(arguments).map(([type, name]) => `${ type } $${ name }`).join(', ');

    return `
    public function ${ name }(${ arguments }): ${ returnType } 
    {
        ${ inner }
    }`
}

function findEndpoint(name, config) {
    if (config._type === 'request') {
        return Object.keys(paths).find(key => {
            const path = paths[key];

            return ['put', 'post'].find(
                method => path[method]?.parameters.find(i => i.name === 'body')?.schema.$ref.split('/').reverse()[0] === name
            )
        });
    }

    if (config._type === 'resource') {
        const operationId = `get-${ name.kebab() }`

        return Object.keys(paths).find(key => {
            const path = paths[key];

            // Check if opration can be found by name
            let found = Object.values(path).find(i => i.operationId === operationId);

            if (found) {
                return true;
            }

            // Check if operation can be found by reference
            return Object.values(path).find(
                i => Object.values(i.responses)
                    .filter(i => !! i.schema?.$ref)
                    .find(i => i.schema.$ref.split('/').reverse()[0] === name)
            );
        });
    }

    return null;
}

function findResponse(name, config) {
    if (config._type !== 'request') {
        return null;
    }

    const response = name.replace('Request', 'Response');

    return names.find(i => i === response) ? `${ response }::class` : null;
}