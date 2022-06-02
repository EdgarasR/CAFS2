function checkNumber(num) {
    if((num % 3) == 0 && (num % 5) == 0) {
        return 'Skaičius dalijasi iš 3 ir iš 5';
    } else if((num % 3) == 0) {
        return 'Skaičius dalijasi iš 3';
    } else if((num % 5) == 0) {
        return 'Skaičius dalijasi iš 5';
    } else {
        return 'Skaičius nesidalija nei iš 3 nei iš 5';
    }
}

console.log(checkNumber(30));
