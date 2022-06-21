let arr = [11,-2,34,45,19,6];

function reduce(arr) {
    return arr.reduce((previousValue, currentValue, currentIndex, fullArray) => {
        // console.log('reduce', {previousValue, currentValue, currentIndex, fullArray});
        if(currentValue > 0) {
            previousValue += currentValue;
        }
        return previousValue;
    }, 0);
}

console.log(reduce(arr));

console.log(arr.reduce((p, c) => c > 0 ? p + c : p, 0));