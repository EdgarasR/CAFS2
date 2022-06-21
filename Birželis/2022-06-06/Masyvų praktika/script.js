// Testuosime šį masyvą

let numbers = [5, 1, 7, 2, -9, 8, 2, 7, 9, 4, -5, 2, -6, -4, 6];

// 1. Parašykite funkciją arrDoubled, kuri sukuria ir grąžina naują masyvą, kurio elementai padauginti iš 2;

function arrDoubled(arr) {
  let a = arr.map(x => x * 2);
  return a;
}
console.log(arrDoubled(numbers));

// 2. Parašykite funkciją arrMultiplied, kuri sukuria ir grąžina naują masyvą, kurio elementai padauginti iš argumentu nurodyto skaičiaus

function arrMultiplied(arr, arg) {
  let b = arr.map(x => x * arg);
  return b;
}
console.log(arrMultiplied(numbers, 5));

// 3. Parašykite funkciją arrCountTwos, kuri suskaičiuoja dvejetus masyve

function arrCountTwos(arr) {
    let count = 0;
    arr.forEach(item => (item === 2 && count++));
    return count;
}
console.log(arrCountTwos(numbers));

// 4. Parašykite funkciją arrIndexOfFirst, kuri grąžintu pirmo surasto, argumentu nurodyto skaičiaus, indeksą masyve. Jei skaičius nerastas funkcija turi grąžinti -1.

function arrIndexOfFirst(arr, arg) {
    return arr.indexOf(arg);
}
console.log(arrIndexOfFirst(numbers,7));

// 5. Parašykite funkciją arrIndexOfLast, kuri grąžintu paskutinio surasto, argumentu nurodyto skaičiaus, indeksą masyve. Jei skaičius nerastas funkcija turi grąžinti -1.

function arrIndexOfLast(arr, arg) {
  return arr.lastIndexOf(arg);
}
console.log(arrIndexOfFirst(numbers,7));

// 6. Parašykite funkciją reverseNumbers, kuri pakeis skaičius vietomis taip, kad pirmas skaičius taps paskutiniu, antras piešpaskutiniu, o buvęs paskutinis taps pirmu, priešpaskutinis bus antru.
// Pvz.: Turime skaičius 32243;
// Iškvietus funkciją rezultata bus: 34223

function reverseNumbers(arr) {
  return arr.reverse();
}
console.log(reverseNumbers(numbers));

// 7. Parašykite  funkciją, kuri kaip argumentą priims skaičių masyvą ir suras atitinkamai mažiausią ir didžiausią skaičių bei juos grąžins.
// Pvz.: Turime masyvą: [8,5,4,2,7,1,9]
// Iškvietus funkciją rezultata bus: "Mažiausas: 1, Didžiausas: 9"
let Test = [8,5,4,2,7,1,9];
function minMax(arr) {
    return `Mažiausias: ${Math.min(...arr)}, Didžiausias: ${Math.max(...arr)}`;
}
console.log(minMax(Test))

// 8. Parašykite  funkciją checkForLetters, kuri priims du argumentus: Pirmas argumentas bus sakinys (arba žodžiai (-is)) ir antras argumentas bus raidė (kaip string). Funkcija turės suskaičiuoti kiek pirmu agrumentu nurodytame sakinyje/žodžiuose(-yje) yra antru argumentu nurodytų raidžių ir gražinti tų raidžių sumą su sakiniu pvz.: “Raidė “v” sakinyje rasta 4 kartus”.

let sentence = 'Abėcėlė turi daug raidžių';
let letter = 'a';
function checkForLetters(arg1, arg2) {
    let arg3 = arg1.toLowerCase();
    let arg4 = arg2.toLowerCase();
    let result = arg3.split(arg4).length - 1;
    return `Sakinyje/žodyje "${arg1}" yra ${result} "${arg2}" raidės(-ių)`
}
console.log(checkForLetters(sentence, letter));

// 9. Parašykite funckiją, kuri ras visus skaičius esančius masyve ir gražins juos kaip atsikrą masyvą. Naujame masyve visi skaičiai bus surikiuoti nuo mažiausio iki didžiausio.
// let arr2 = [8, 'Hello', 'click', 'u', 7, 4, 'a', 'a', 3, 6, "chair", ,10, 1];
// Iškvietus funkciją rezultata bus: [1,3,4,6,7,8,10];

arr2 = [8, 'Hello', 'click', 'u', 7, 4, 'a', 'a', 3, 6, "chair", ,10, 1];
function newArr(arr) {
    let onlyNumbers = arr.filter(item => typeof item === 'number');
    onlyNumbers.sort(function(a, b){return a-b});
    return onlyNumbers;
}
console.log(newArr(arr2));

// 10. Sukurkite funkciję checkIfAllSmaller(arr, max), BE MASYVO METODŲ, kuri patikrintų ar visi skaičiai masyve yra didesni negu perduota reikšmė max;
// Pvz.: Turime masyvą: let arr1 = [2, 7, 6, 9, 5];
// Iškvietus funkciją checkIfAllSmaller(arr1, 5) rezultata bus: False

let arr1 = [2,7,6,9,5];
function checkIfAllSmaller(arr, max) {
    for(i=0;i<arr.length;i++){
      if(arr[i] < max){
        return false;
      }
    return true;
    }
}
console.log(checkIfAllSmaller(arr1, 3));

// 11. Parašykite funkciją filteredByLetter, kuri turi du parametrus: 1. masyvas; 2. raidė. Funkcija sukuria ir grąžina naują masyvą, kuriame yra visi masyvo, nurodyto kaip pirmas parametras elemntai, kuriuose galima rasti antru paramatetru nurodytą raidę.
// Testuosime šį masyvą
let citiesOfLithuania = [
  'Vilnius',
  'Kaunas',
  'Klaipėda',
  'Šiauliai',
  'Panevėžys',
  'Alytus',
  'Marijampolė',
  'Mažeikiai',
  'Jonava',
  'Utena',
];

let letter2 = 'j';
function filteredByLetter(param1, param2) {
    let param3 = param1.map(item => item.toLowerCase());
    let param4 = param2.toLowerCase();
    let newArr = param3.filter(item => item.includes(param4))
    return newArr;
}
console.log(filteredByLetter(citiesOfLithuania,letter2));

// 12. Parašykite penkias funkcijas:
// - calculateValue()
// - addition()
// - subtraction()
// - multiplication()
// - division()

// Pagridinė funkcija bus calculateValue(num1, num2, action), kuri priims tris argumentus: a) num1 - skaičius;b) num2 - skaičius; c) action - (matematinis veiksmas kaip string pvz. “substraction”). Būtina, kad funckija validuotų ar num1 ir num2 yra skaičiai.

// Priklausomai trečio argumento (action), su pirmais dviem (num1 ir num2) bus atliekamas matematinis veiksmas ir kviečiama viena iš keturių funkcijų, kurios priims du argumentus (num1 ir num2) ir grąžins atlikta veiksmą.

// Pastaba: šios funkcijos: addition(), subtraction(), multiplication(), division() turi būti kviečiamas calculateValue() viduje, o aprašomos išorėje.

function addition(num1,num2) {
    let result = num1 + num2;
    return result;
}
function subtraction(num1,num2) {
  let result = num1 - num2;
  return result;
}
function multiplication(num1,num2) {
  let result = num1 * num2;
  return result;
}
function division(num1,num2) {
  let result = num1 / num2;
  return result;
}
function calculateValue(num1,num2,action){
  if(isNaN(num1) || isNaN(num2)){
    return 'NOT A NUMBER';
  }
  if(action == 'addition') {
    result = addition(num1,num2);
    return result;
  }else if(action == 'subtraction') {
    result = subtraction(num1,num2);
    return result;
  }else if(action == 'multiplication') {
    result = multiplication(num1,num2);
    return result;
  }else if(action == 'division') {
    result = division(num1,num2);
    return result;
  };
}
console.log(calculateValue(10,5,'division'))