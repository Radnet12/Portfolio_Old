'use strict';
import Swiper from './vendors/swiper';
import burger from './components/burger';
import gsapAnim from './components/gsap';
import accordion from './components/accordion';


window.addEventListener('DOMContentLoaded', function () {
    burger();
    let cleanSwiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 500,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    let feedbackSwiper = new Swiper('.feedback__slider', {
        slidesPerView: 2,
        centeredSlides: true,
        initialSlide: 1,
        effect: 'coverflow',

        coverflowEffect: {
            rotate: 5,
            slideShadows: true,
            depth: 300,
            stretch: 250
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    if (document.querySelector('.main')) {
        gsapAnim();
    }
});

