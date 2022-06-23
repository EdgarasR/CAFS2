class Car {
    constructor(make,model,year) {
        this.make = make;
        this.model = model;
        this.year = year;
    }
    getIntroduction = function() {
        return `${this.make} ${this.model}`;
    }
    getAge = function() {
        let date = new Date();
        let years = date.getFullYear();
        return ((years - this.year)<10) ? '10 metų arba jaunesnis' : '11 metų arba senesnis';
    }
}

let bmw = new Car('BMW','330d',2010);
console.log(bmw.getIntroduction());
console.log(bmw.getAge());

class Motorcycle extends Car {
    constructor(make,model,year,wheels) {
        super(make,model,year);
        this.wheels = wheels;
    }
    getWheelsNumber = function () {
        return (this.wheels > 2 && this.wheels < 4) ? 'Motociklas turi 3 ratus' : 'Moticiklas turi 2 ratus';
    }
}

let moto = new Motorcycle('Yamaha','Something',2018,2);
console.log(moto.getWheelsNumber());