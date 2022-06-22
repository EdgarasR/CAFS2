//Susikurkite objektų konstruktorių naudojant new pavadinimu Book, kuris galės kurti objektus, kurie turės šias savybes (properties): name, author, year ir metodus (naudojant prototype), kurių vienas parašys pavadinima ir autorių, o kitas parodys knygos amžių (senumą).

class Books {
    constructor(name,author,year) {
        this.name = name;
        this.author = author;
        this.year = year;
    }
    getNameAndAuthor() {
        return `Knygos autorius: ${this.author}.
Knygos pavadinimas: ${this.name}`;
    }
    getAge() {
        let date = new Date().getFullYear();
        return `Knygos amžius: ${date - this.year} metų.`;
    }
}

let book1 = new Books('The Da Vinci Code','Dan Brown',2003);

console.log(book1);
console.log(book1.getNameAndAuthor());
console.log(book1.getAge());