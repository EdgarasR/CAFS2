function getLaugh(num) {
    let msg = '';
    for (let i=0; i<num; i++) {
        msg += 'ha';
    }
    return msg;
}

console.log(getLaugh(5));

function getLaugh2(num) {
    let msg = '';
    let i = 0;
    while(i < num) {
        msg += 'ha';
        i++
    }
    return msg;
}

console.log(getLaugh2(3));

function getLaugh3(num) {
    let msg = '';
    let i = 0;
    do {
        msg += 'ha';
        i++;
    } while(i < num);
    return msg;
}

console.log(getLaugh3(7));