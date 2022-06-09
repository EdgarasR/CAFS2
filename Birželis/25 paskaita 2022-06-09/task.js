let btn = document.querySelector('button');
if (btn) {
    btn.addEventListener('click', copy)
};
function copy() {
    document.querySelector('#second').value = document.querySelector('#first').value;
}

