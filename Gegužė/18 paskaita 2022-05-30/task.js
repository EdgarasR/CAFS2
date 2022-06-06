// function checkAge(age) {
//     return ((age >= 18) ? 'Access granted' : 'Access denied');
// }

// console.log(checkAge(17));
// console.log(checkAge(21));

// function minimum(a,b,c) {
//     return Math.min(a,b,c);
// }
// console.log(minimum(0,1,5));

// function getMin() {
//     console.log(arguments);
//     return Math.min.apply(null, arguments);
// }

// console.log(getMin(8,5,7,3,-1));

const showMessage = function (message = null) {
    console.log(message);
}

showMessage('Hi');