const popUp = document.getElementById('pop-up');
const addBooks = document.querySelectorAll('.add-book'); 
const close = document.querySelector('.close');


addBooks.forEach(addBook => {
    addBook.addEventListener('click', () => {
       
        popUp.classList.add('active');
    });
});


close.addEventListener('click', () => {
    popUp.classList.remove('active');
});
