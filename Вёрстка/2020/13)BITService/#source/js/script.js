'use strict';
window.addEventListener('DOMContentLoaded', function () {
@@include('checkWebp.js');
@@include('svg4everybody.min.js');

// Burger
const burgerMenu = document.querySelector('.header__burger'),
    body = document.querySelector('body'),
    menu = document.querySelector('.header__nav'),
    links = document.querySelectorAll('nav li a');

burgerMenu.addEventListener('click', () => {
    burgerMenu.classList.toggle('active');
    body.classList.toggle('lock');
    menu.classList.toggle('active');
});
links.forEach(link => {
    link.addEventListener('click', () => {
        burgerMenu.classList.remove('active');
        body.classList.remove('lock');
        menu.classList.remove('active');
    });
});
});
// popup
const modal = document.querySelector('.modal'),
    modalBtn = document.querySelector('.main__btn'),
    closeBtn = document.querySelector('.modal__close'),
    overlay = document.querySelector('.modal__overlay');
let paddingOffset = window.innerWidth - document.body.offsetWidth + 'px';

modalBtn.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.add('modal__active');
    document.body.classList.add('lock');
    document.body.style.paddingRight = paddingOffset;
});
closeBtn.addEventListener('click', () => {
    modal.classList.remove('modal__active');
    document.body.classList.remove('lock');
    document.body.style.paddingRight = '0px';
});
overlay.addEventListener('click', (e) => {
    if (e.target == overlay) {
        modal.classList.remove('modal__active');
        document.body.classList.remove('lock');
        document.body.style.paddingRight = '0px';
    }
});
