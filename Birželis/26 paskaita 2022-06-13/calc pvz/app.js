//3.
//Changing colors of opertion colors 

//Multiply Color
const colorMultiply = document.getElementById('multiply')
colorMultiply.style.backgroundColor = "green"

//Divide Color
const colorDivide = document.getElementById('divide')
colorDivide.style.backgroundColor = "red"

//subtract color
const colorSubtract = document.getElementById('subtract')
colorSubtract.style.backgroundColor="blue"

//add color
const colorAdd = document.getElementById('add')
colorAdd.style.backgroundColor="yellow"


//change font of numbers to blue (I did it like this incase anyone wants to color of a single number)
//Makes it easier
const number1 = document.getElementById('number1')
number1.style.color="blue"
const number2 = document.getElementById('number2')
number2.style.color="blue"
const number3 = document.getElementById('number3')
number3.style.color="blue"
const number4 = document.getElementById('number4')
number4.style.color="blue"
const number5 = document.getElementById('number5')
number5.style.color="blue"
const number6 = document.getElementById('number6')
number6.style.color="blue"
const number7 = document.getElementById('number7')
number7.style.color="blue"
const number8 = document.getElementById('number8')
number8.style.color="blue"
const number9 = document.getElementById('number9')
number9.style.color="blue"
const number0 = document.getElementById('number0')
number0.style.color="blue"
const decimal = document.getElementById('decimal')
decimal.style.color="blue"

//Changing color of the clear button
const clear = document.getElementById('clear')
clear.style.color="white"
clear.style.backgroundColor="black"


// Then we want to insert `memoryStoreButton` before the `clear` button:
var memoryStoreButton = document.createElement("BUTTON");
memoryStoreButton.innerHTML = "MS";
clear.before(memoryStoreButton); //puts button before clear

// Then we want the `memoryClearButton` before `memoryStoreButton`
var memoryClearButton = document.createElement("BUTTON");
memoryClearButton.innerHTML = "MC";
memoryStoreButton.before(memoryClearButton);//puts button before clear

// and finally, the `memoryRestoreButton` before `memoryClearButton`
var memoryRestoreButton = document.createElement("BUTTON");
memoryRestoreButton.innerHTML = "MR";
memoryClearButton.before(memoryRestoreButton);//puts button before clear


const buttonClick = document.querySelector(".btn8 btn-grey");
/*
buttonClick.addEventListener('click', function(event){
})
*/