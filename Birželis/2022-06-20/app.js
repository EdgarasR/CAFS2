let slideIndex = 0;

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slider-wrapper");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 2000);
}
showSlides();

function showTime() {
    let date = new Date();
    let h = date.getHours();
    let m = date.getMinutes();
    let s = date.getSeconds();
    m = checkTime(m);
    s = checkTime(s);

    const time = `${h}:${m}:${s}`;
    document.getElementById('clock').textContent = time;

    setTimeout(showTime, 1000)
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}
showTime();

let form = document.querySelector('form');
let textarea = document.querySelector('#textarea');
let email = document.querySelector('#email');
let message = "Request submited!";
form.addEventListener('submit', (e) => {
    e.preventDefault();
    if(textarea.value == "" || email.value == ""){
        alert('Please fill required fields');
        return false;
    }
    let msg = document.querySelector('#message');
    msg.textContent = message;
    msg.style.paddingBottom = '50px';
    msg.scrollIntoView();
})