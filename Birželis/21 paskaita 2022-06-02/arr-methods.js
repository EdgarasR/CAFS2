const arrSimple = [
    'Petras',
    'Juozas',
    'Antanas'
];

console.log(arrSimple.length, arrSimple);
console.log(arrSimple[0]); // first
console.log(arrSimple[arrSimple.length - 1]); // last

// Pushas i gala
arrSimple.push('Martynas', 'Mantas', 'Andrius');
console.log(arrSimple);

// Pushas i prieki
arrSimple.unshift('Gediminas', 'Lukas');
console.log(arrSimple);

// Istrina gala
arrSimple.pop();
console.log(arrSimple);

// Istrina prieki
arrSimple.shift();
console.log(arrSimple);

for (const key of arrSimple.keys()) {
    console.log(key);
}

const arrSimpleObj = [
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
const found = arrSimpleObj.find(element => element.name == 'Petras');

console.log(found);