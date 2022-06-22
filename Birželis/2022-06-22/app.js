//object literal
//masyvas kaip pvz
let userArr = [
    'Edgaras', // Name
    'Kaunas', // City
    27 // Age
];
console.log(userArr[1]);

let userObj = {
    name: 'Edgaras',
    city: 'Kaunas',
    age: 27,
    sayName: function() {
        return this.name;
    }
};
console.log(userObj.name);
console.log(userObj.sayName());

class UserUsingClass {
    constructor(name, city, age) {
        this.name = name;
        this.age = age;
        this.city = city;
    }
}

let userClass = new UserUsingClass('Edgaras','Kaunas',27);
console.log(userClass.name, userClass.city, userClass.age);
console.log(typeof(userClass.name));
console.log(typeof(userClass.age));

let date = new Date();
let time = date.getFullYear();
console.log(time);