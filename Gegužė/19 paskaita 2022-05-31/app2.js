function sumOfDigits(number) {
    if (number == 0) {
        return 0;
    }
    let remainder = number % 10;
    let remainNum = Math.floor(number / 10);
    return remainder + sumOfDigits(remainNum);
}

console.log(sumOfDigits(4321));

const sumOfDigitsArrow = number => 
    number ? 
    (number % 10) + sumOfDigitsArrow(Math.floor(number / 10)) : 
    0;

console.log(sumOfDigitsArrow(4321));