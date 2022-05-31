function plus(a,b) {
    for(i=1; i<=b; i++){
        a++
    }
    return a
}

console.log(plus(4,5));

function plusRecursion(num, plus) {
    if (num == (num + plus)) {
        return num;
    }
        num++;
        plus--;

        return plusRecursion(num, plus);
}

console.log(plusRecursion(4,11));

function rFact(num) {
    if (num === 0) {
        return 1;
    } else {
        return num * rFact(num - 1);
    }
}

console.log(rFact(4))

function askAge() {
    let age = prompt('What is your age?');
    if (age === null) {
        return false;
    }
    age = Number(age);
    
    if (age > 0 && age < 120) {
        return age;
    }
    return askAge()
}

console.log(askAge());