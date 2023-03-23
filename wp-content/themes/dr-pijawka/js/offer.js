/**
 * File procedure.js.
 *
 * Edit offer background on scroll.
 *
 */

const offer = document.querySelector('#offer');

window.addEventListener("scroll", function () {
    let y = window.scrollY;
    if (window.screen.width > 768) {
        for (let i = 0; i < 90; i++) {
            if (y >= i * 10 + 3150) {
                let j = i + 136;
                offer.style.background = "linear-gradient(" + j + "deg, rgba(123,132,48,1) 0%, rgba(79, 34, 89, 1) 100%)";
            }
        }
    } else {
        for (let i = 0; i < 90; i++) {
            if (y >= i * 10 + 4300) {
                let j = i + 136;
                offer.style.background = "linear-gradient(" + j + "deg, rgba(123,132,48,1) 0%, rgba(79, 34, 89, 1) 100%)";
            }
        }
    }
});