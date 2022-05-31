function plus(a,b) {
    for(i=1; i<=b; i++){
        a++
    }
    return a
}

console.log(plusPlus(4,5));

function plusRecursion(num, plus) {
    if (num == (num + plus)) {
        return num;
    }
        num++;
        plus--;

        return plusRecursion(num, plus);
}

console.log(plusRecursion(4,11));