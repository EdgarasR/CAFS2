
// FIRST CARD

document.querySelector('.first')?.addEventListener('click', function() {
    alert('Hello world!');
});

// SECOND CARD

let inp = document.querySelector('#inp1');
let btn1 = document.querySelector('#btn1')
let btn2 = document.querySelector('#btn2')
let btn3 = document.querySelector('#btn3')
let btn4 = document.querySelector('#btn4')

btn1?.addEventListener('click', function() {
    inp.value = inp.value.toUpperCase();
})
btn2?.addEventListener('click', function() {
    inp.value = inp.value.toLowerCase();
})
btn3?.addEventListener('click', function() {
    inp.value = inp.value[0].toUpperCase() + inp.value.slice(1);
})
btn4?.addEventListener('click', function() {
    inp.value = inp.value[0].toLowerCase() + inp.value.slice(1);
})

// THIRD CARD

let idEmail = document.querySelector('#email');
let idPhone = document.querySelector('#phone');
let btnSave = document.querySelector('#btnSave');
let emailCheck = document.querySelector('#emailCheck');
let phoneCheck = document.querySelector('#phoneCheck');

btnSave?.addEventListener('click', function() {
    if (!idEmail.value.includes('@') && idPhone.value == "") {
        idEmail.classList.add('is-invalid');
        emailCheck.style.display = 'block';
        idPhone.classList.add('is-invalid');
        phoneCheck.style.display = 'block';
    }else if (!idEmail.value.includes('@')) {
        idEmail.classList.add('is-invalid');
        emailCheck.style.display = 'block';
        idPhone.classList.remove('is-invalid');
        phoneCheck.style.display = 'none';
    }else if (idPhone.value == "") {
        idPhone.classList.add('is-invalid');
        phoneCheck.style.display = 'block';
        idEmail.classList.remove('is-invalid');
        emailCheck.style.display = 'none';
    }
});

// FORTH CARD

let btnBlock = document.querySelector('#block');
let btnUnblock = document.querySelector('#unblock');
let inpBlockUnblock = document.querySelector('#inpBlockUnblock');

btnBlock?.addEventListener('click', function() {
    inpBlockUnblock?.setAttribute('readonly','');
});

btnUnblock?.addEventListener('click', function() {
    inpBlockUnblock?.removeAttribute('readonly');
});

// FIFTH CARD

let img = document.querySelector('#image');

img?.addEventListener('mouseenter', function() {
    img.setAttribute('src', 'https://i.imgur.com/PLDVxza.jpg');
});
img?.addEventListener('mouseleave', function() {
    img.setAttribute('src', 'https://i.imgur.com/0DElr0H.jpg');
});

// SIXTH CARD

let resetAll = document.querySelector('#resetAll')

let pointer = document.querySelector('#pointer');
let textCursor = document.querySelector('#textCursor');
let copy = document.querySelector('#copy');
let help = document.querySelector('#help');
let crosshair = document.querySelector('#crosshair');

let changeText = document.querySelector('#text');
let redColor = document.querySelector('#redColor');
let greenColor = document.querySelector('#greenColor');
let blueColor = document.querySelector('#blueColor');
let redBorder = document.querySelector('#redBorder');
let greenBorder = document.querySelector('#greenBorder');
let blueBorder = document.querySelector('#blueBorder');

// COLORS

redColor.addEventListener('click', function(e) {
    e.preventDefault();
    changeText.style.color = 'red';
});
greenColor.addEventListener('click', function(e) {
    e.preventDefault();
    changeText.style.color = 'green';
});
blueColor.addEventListener('click', function(e) {
    e.preventDefault();
    changeText.style.color = 'blue';
});

// BORDERS

redBorder.addEventListener('click', function(e) {
    e.preventDefault();
    changeText.style.border = '1px solid red';
});
greenBorder.addEventListener('click', function(e) {
    e.preventDefault();
    changeText.style.border = '1px solid green';
});
blueBorder.addEventListener('click', function(e) {
    e.preventDefault();
    changeText.style.border = '1px solid blue';
});

// CURSORS

pointer.addEventListener('click', function(e) {
    e.preventDefault();
    document.body.style.cursor = 'pointer';
    console.log('POINTER');
});
textCursor.addEventListener('click', function(e) {
    e.preventDefault();
    document.body.style.cursor = 'text';
    console.log('TEXT');
});
copy.addEventListener('click', function(e) {
    e.preventDefault();
    document.body.style.cursor = 'copy';
    console.log('COPY');
});
help.addEventListener('click', function(e) {
    e.preventDefault();
    document.body.style.cursor = 'help';
    console.log('HELP');
});
crosshair.addEventListener('click', function(e) {
    e.preventDefault();
    document.body.style.cursor = 'crosshair';
    console.log('CROSSHAIR');
});

resetAll.addEventListener('click', function(e) {
    e.preventDefault();
    changeText.style.color = 'black';
    changeText.style.border = 'none';
    document.body.style.cursor = 'auto';
})