const fs = require('fs');
const pluralize = require('pluralize');

String.prototype.ucfirst = function () {
    return this.charAt(0).toUpperCase() + this.slice(1);
};

const definitions = getDefinitions();

for (const [name, config] of Object.entries(definitions)) {
    const phpClass = createPhpClass(name, config);
    fs.writeFileSync(`${ __dirname }/generated/${ name.ucfirst() }.php`, phpClass);
}

function getDefinitions() {
    return JSON.parse(fs.readFileSync(`${ __dirname }/../api.json`, "utf-8")).definitions;
}

function createPhpClass(name, config) {
    const stub = getStub();

    const methods = [];

    for (const [name, property] of Object.entries(config.properties)) {
        setupPHPType(property);

        methods.push(
            createGetMethod(name, property),
            createSetMethod(name, property),
        )
    }

    return stub
        .replaceAll('{{ class }}', name.ucfirst())
        .replaceAll('{{ endpoint }}', 'endpoint')
        .replaceAll('{{ bolComResource }}', name)
        .replaceAll('{{ methods }}', methods.join("\n"));
}

function getStub() {
    return fs.readFileSync(`${ __dirname }/stubs/resource.stub`, 'utf-8');
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