let arr = [
    11,
    -2,
    34, 
    45, 
    19, 
    6
];

function getMaxSubSum(arr) {
    let sum = 0;
    for (i=0;i<arr.length;i++) {
        if (arr[i] > 0) {
            sum += arr[i];
        }
    }
    return sum;
}
console.log(getMaxSubSum(arr));
console.assert(getMaxSubSum(arr) == 115);

function getForEach(arr) {
    let sum = 0;
   arr.forEach(value => {
       if (value > 0) {
           sum += value;
       }
   })
    return sum;
}

console.log(getForEach(arr));