let param = document.querySelector(".buttons");
let screen = document.querySelector("#numberBox");
let = screen.value = '';

function getNum(e) {
    if(e.target.nodeName === "BUTTON") {
        let pressed = e.target.textContent;
        // console.log(`${pressed}`);
        screen.value += pressed;
    }
}

param?.addEventListener('click', getNum);

function clr(e) {
    if(e.target.id === "clear") {
        screen.value = '';
    }
}

param?.addEventListener('click', eql);
param?.addEventListener('click', clr);

function eql(e) {
    if(e.target.id === "equals") {
        if(screen.value.includes('+')) {
            screen.value.split('');
            let num1 = Number(screen.value[0]);
            let num2 = Number(screen.value[2]);
            let result = num1 + num2;
            screen.value = result;
        }else if(screen.value.includes('-')) {
            screen.value.split('');
            let num1 = Number(screen.value[0]);
            let num2 = Number(screen.value[2]);
            let result = num1 - num2;
            screen.value = result;
        }else if(screen.value.includes('*')) {
            screen.value.split('');
            let num1 = Number(screen.value[0]);
            let num2 = Number(screen.value[2]);
            let result = num1 * num2;
            screen.value = result;
        }else if(screen.value.includes('/')) {
            screen.value.split('');
            let num1 = Number(screen.value[0]);
            let num2 = Number(screen.value[2]);
              if (num2 == 0) {
                  console.log('0 division');
                  return screen.value = `ERROR`;
              }
            let result = num1 / num2;
            screen.value = result;
        }
    }
}