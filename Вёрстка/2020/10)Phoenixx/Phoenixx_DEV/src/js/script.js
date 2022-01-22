'use strict';
import Swiper from './vendors/swiper';
import fslightbox from './vendors/fslightbox';
import burger from './components/burger';
import scrollHeader from './components/scrollHeader';
import tabs from './components/tabs';


window.addEventListener('DOMContentLoaded', function () {
    burger();
    scrollHeader();
    tabs('.tabs-nav__list', '.tabs-nav__item', '.tabs-content__wrapper', 'tabs-nav__item--current');
});

