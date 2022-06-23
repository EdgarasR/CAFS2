// Naudojant ES6 klases sukurkite objekto Filmas (Movie) kūrimo konstruktorių, kuris turės šias savybes: 
// 1. name; 2. year; 3. director; 4. budget; 5. income.
// ir metodus: 
// 1. getIntroduction, kuris grąžins filmo pilną pavadinimą (su name, year, director); 
// 2. getProfit, kuris grąžins sumą, kurią uždirbo (pelną) filmas.
// Testavimui, sukurkite du filmus, kurie turės nurodytas savybes ir metodus.

class Movies {
    constructor(name,year,director,budget,income) {
        this.name = name;
        this.year = year;
        this.director = director;
        this.budget = budget;
        this.income = income;
        this.getIntroduction = function() {
            return `Movie: ${this.name}, year: ${this.year}, director: ${this.director}`};
        this.getProfit = function() {;
            return `Pelnas: ${this.income - this.budget} USD.`};
        };
};

let Movie1 = new Movies('Titanic',1997,'James Cameron', 200000000,2207986545);
let Movie2 = new Movies('Transformers',2007,'Michael Bay',147000000,319246193);

console.log(Movie1);
console.log(Movie1.getIntroduction());
console.log(Movie1.getProfit());
console.log(Movie2);
console.log(Movie2.getIntroduction());
console.log(Movie2.getProfit());