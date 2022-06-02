let arrSimple = [
    'Edgaras',
    'Petras',
    'Antanas'
];

let arrAsObj = new Array(
    'Edgaras',
    'Petras',
    'Antanas'
);

console.log(arrSimple);
console.log(arrAsObj);
console.log(arrSimple[0]);
console.log(arrSimple[1]);
console.log(arrSimple[2]);

arrSimple[2] = 'Juozas';
arrSimple[3] = 'Kristina';

console.log(arrSimple);

for (let key in arrSimple) {
    console.log('for-in', key, arrSimple[key]);
}
for (let value of arrSimple) {
    console.log('for-of', value);
}

let indexNameOfPetras = 1;

console.log(arrSimple[indexNameOfPetras]);

const arrSimpleOfObjects = [
    {
        name: 'Edgaras',
        age: 27
    },
    {
        name: 'Petras',
        age: 27
    },
    {
        name: 'Antanas',
        age: 27
    },
];

function getIndexOf(someArr, name) {
    for (let key in arrSimple) {
        if(someArr[key]?.name == name) {
            return key;
        }
    }
}

// console.log(getIndexOf(arrSimpleOfObjects, 'Edgaras'), arrSimpleOfObjects[getIndexOf(arrSimpleOfObjects, 'Edgaras')]);
let userIndex = getIndexOf(arrSimpleOfObjects, 'Edgaras');

console.log(arrSimpleOfObjects[userIndex]?.age);