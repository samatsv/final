const popUp = document.getElementById('pop-up'),
    addBook = document.querySelector('.add-book'),
    close = document.querySelector('.close');


addBook.addEventListener('click', () => {
    popUp.classList.add('active');
});

close.addEventListener('click', () => {
    popUp.classList.remove('active');
});