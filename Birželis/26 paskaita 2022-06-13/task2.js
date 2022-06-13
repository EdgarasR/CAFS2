function addition(num1,num2) {
    result = num1 + num2;
    return result;
}
function subtraction(num1,num2) {
  return num1 - num2;
}
function multiplication(num1,num2) {
  return num1 * num2;
}
function division(num1,num2) {
  return num1 / num2;
}
function calculateValue(num1,num2,action){
  if(isNaN(num1) || isNaN(num2)){
    return 'NOT A NUMBER';
  }
  if(action == '+') {
    return addition(num1,num2);
  }else if(action == '-') {
    return subtraction(num1,num2);
  }else if(action == '*') {
    return multiplication(num1,num2);
  }else if(action == '/') {
    return division(num1,num2);
  };
}


let param = document.querySelector(".buttons");
let screen = document.querySelector("#numberBox");
let = screen.value = '';

function getNum(e) {
    if(e.target.nodeName === "BUTTON") {
        let pressed = e.target.textContent;
        console.log(`${pressed}`);
        screen.value += pressed;
    }
}

param?.addEventListener('click', getNum);

function clr(e) {
    if(e.target.id === "clear") {
        screen.value = '';
    }
}

param?.addEventListener('click', clr);

function eql(e) {
    if(e.target.id === "equals") {
        if(screen.value.includes('+')) {
            screen.value.split('');
            console.log(screen.value);
            let num1 = Number(screen.value[0]);
            let num2 = Number(screen.value[2]);
            console.log(num1);
            console.log(num2);
            let result = num1 + num2;
            console.log(result);
            screen.value = result;
        }else if(screen.value.includes('-')) {
            screen.value.split('');
            console.log(screen.value);
            let num1 = Number(screen.value[0]);
            let num2 = Number(screen.value[2]);
            console.log(num1);
            console.log(num2);
            let result = num1 - num2;
            console.log(result);
            screen.value = result;
        }else if(screen.value.includes('*')) {
            screen.value.split('');
            console.log(screen.value);
            let num1 = Number(screen.value[0]);
            let num2 = Number(screen.value[2]);
            console.log(num1);
            console.log(num2);
            let result = num1 * num2;
            console.log(result);
            screen.value = result;
        }else if(screen.value.includes('/')) {
            screen.value.split('');
            console.log(screen.value);
            let num1 = Number(screen.value[0]);
            let num2 = Number(screen.value[2]);
            console.log(num1);
            console.log(num2);
            if (num2 == 0) {
                console.log('0 division');
                return screen.value = `ERROR`;
            }
            let result = num1 / num2;
            console.log(result);
            screen.value = result;
        }
    }
}

param?.addEventListener('click', eql);