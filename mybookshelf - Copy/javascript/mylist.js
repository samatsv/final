const sections = document.querySelectorAll('.status');
const scrollBtn = document.getElementById('scroll-btn');

let currentSection = 0;

function scrollToNextSection() {
    currentSection = (currentSection + 1) % sections.length;

    const sectionTop = sections[currentSection].offsetTop;
    const offsetAdjustment = -160; 

    window.scrollTo({
        top: sectionTop + offsetAdjustment,
        behavior: "smooth"
    });
}

scrollBtn.addEventListener('click', scrollToNextSection);


////////////////////////


const popUp = document.getElementById('pop-up');
const removeButtons = document.querySelectorAll('.remove');
const close = document.querySelector('.close');
const cancel = document.querySelector('.cancel');
const confirm = document.querySelector('.confirm');

removeButtons.forEach(button => {
    button.addEventListener('click', () => {
        popUp.classList.add('active');
    });
});

close.addEventListener('click', () => {
    popUp.classList.remove('active');
});

cancel.addEventListener('click', () => {
    popUp.classList.remove('active');
});

confirm.addEventListener('click', () => {
    popUp.classList.remove('active');
});


