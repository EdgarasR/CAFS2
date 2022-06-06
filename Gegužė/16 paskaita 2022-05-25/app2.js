function getRandom(max) {
    return Math.random() * max;
}

let a = getRandom(10).toFixed(2),
    b = getRandom(10).toFixed(2),
    c = getRandom(10).toFixed(2),
    d = getRandom(10).toFixed(2),
    e = getRandom(10).toFixed(2);

console.log(a, b, c, d, e);

console.log(Math.max(a, b, c, d, e));
console.log(Math.min(a, b, c, d, e));