/**
 * File procedure.js.
 *
 * Edit procedure visibility in main-section.
 *
 */

const procedure1 = document.querySelector('.procedure-1');
const procedure2 = document.querySelector('.procedure-2');
const procedure3 = document.querySelector('.procedure-3');

window.addEventListener("scroll",function() {
    let y = window.scrollY;
    if (y >= 2000) {
        procedure1.classList.add('active');
    } else {
        procedure1.classList.remove('active');
    }
    if (y >= 2250) {
        procedure2.classList.add('active');
    } else {
        procedure2.classList.remove('active');
    }
    if (y >= 2500) {
        procedure3.classList.add('active');
    } else {
        procedure3.classList.remove('active');
    }
});