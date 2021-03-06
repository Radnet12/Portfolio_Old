'use strict';
import tabs from './modules/tabs';
import timer from './modules/timer';
import calc from './modules/calc';
import cards from './modules/cards';
import forms from './modules/forms';
import slider from './modules/slider';
import modal from './modules/modal';
import {
	openModal
} from './modules/modal';

window.addEventListener('DOMContentLoaded', function () {
	const modalTimerId = setTimeout(() => openModal('.modal', modalTimerId), 300000);

	tabs('.tabheader__item', '.tabcontent', '.tabheader__items', 'tabheader__item_active');
	modal('[data-modal]', '.modal', modalTimerId);
	timer('.timer', '2020-07-18');
	cards();
	calc();
	forms('form', modalTimerId);
	slider({
		container: '.offer__slider',
		nextArrow: '.offer__slider-next',
		slide: '.offer__slide',
		prevArrow: '.offer__slider-prev',
		totalCounter: '#total',
		currentCounter: '#current',
		wrapper: '.offer__slider-wrapper',
		field: '.offer__slider-inner'
	});

});