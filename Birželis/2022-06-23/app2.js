class Movie {
    constructor(name,budget,income) {
        this.name = name;
        this.budget = budget;
        this.income = income;
    }
    get name() {
        return this._name;
    }
    set name(value) {
        this._name = value.trim();
        // this._name.toProperCase
    }
    get profit() {
        return `${this.income - this.budget}`;
    }
}
const movie= new Movie('One',5000,7000);
console.log(movie.profit);