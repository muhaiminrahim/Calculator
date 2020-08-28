var modalBtn = document.querySelector('.button-modal');
var modalA = document.querySelector('.modal-a');
var mclose = document.querySelector('.close');

modalBtn.addEventListener('click', function(){
    modalA.classList.add('a-active');
})

mclose.addEventListener('click', function(){
    modalA.classList.remove('a-active');
})