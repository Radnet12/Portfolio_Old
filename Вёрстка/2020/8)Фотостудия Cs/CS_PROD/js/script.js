"use strict";
function testWebP(callback) {

	var webP = new Image();
	webP.onload = webP.onerror = function () {
		callback(webP.height == 2);
	};
	webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {

	if (support == true) {
		document.querySelector('body').classList.add('webp');
	} else {
		document.querySelector('body').classList.add('no-webp');
	}
});

// Sticky header 
const header = document.querySelector('.header'),
	  mainHeight = document.querySelector('.main').scrollHeight;

window.addEventListener('scroll', ()=> {
	if (window.pageYOffset >= mainHeight) {
		header.classList.add('header__active');
	} else {
		header.classList.remove('header__active');
	}
});
// Tabs 
const tabsParent = document.querySelector('.portfolio__tabs'),
	  tabsContent = document.querySelectorAll('.portfolio__bottom-row'),
	  tabs = document.querySelectorAll('.portfolio__tab'),
	  btn = document.querySelector('.portfolio__btn'),
	  seeContent = document.querySelectorAll('.portfolio__wrap_second');

function hideTabContent() {
	tabsContent.forEach(item => {
		item.classList.add('hidden');
		item.classList.remove('active');
		item.classList.remove('fade');
	});
	tabs.forEach(item => {
		item.classList.remove('portfolio__tab-active');
	});
	seeContent.forEach(item => {
		item.classList.add('portfolio__wrap-hidden');
	});
}
function showTabContent(i = 1) {
	tabsContent[i].classList.add('active');
	tabsContent[i].classList.remove('hidden');
	tabsContent[i].classList.add('fade');
	tabs[i].classList.add('portfolio__tab-active');

}
hideTabContent();
showTabContent();

tabsParent.addEventListener('click', function (event) {
	if (event.target && event.target.classList.contains('portfolio__tab')) {
		tabs.forEach((item, i) => {
			if (event.target == item) {
				hideTabContent();
				showTabContent(i);
			}
		});
	}
});
btn.addEventListener('click', ()=> {
	seeContent.forEach(item => {
		item.classList.toggle('portfolio__wrap-hidden');
		item.classList.toggle('fade');
	});
});

// Gallery
window.addEventListener('load', function () {
	baguetteBox.run('.portfolio__column', {
		buttons: false,
	});
});


// Burger
const burgerMenu = document.querySelector('.header__burger'),
	  body = document.querySelector('body'),
	  menu = document.querySelector('.header__nav'),
	  links = document.querySelectorAll('nav li a');

burgerMenu.addEventListener('click', ()=> {
	burgerMenu.classList.toggle('active');
	body.classList.toggle('lock');
	menu.classList.toggle('active');
});
links.forEach(link => {
	link.addEventListener('click', ()=> {
		burgerMenu.classList.remove('active');
		body.classList.remove('lock');
		menu.classList.remove('active');
	});	
});


// popup
const modal = document.querySelector('.modal'),
	  modalBtn = document.querySelector('.feedback__btn'),
	  closeBtn = document.querySelector('.modal__close'),
	  overlay = document.querySelector('.modal__overlay'),
	  fixBlocks = document.querySelectorAll('.fix-block');
let paddingOffset = window.innerWidth - document.body.offsetWidth + 'px';

modalBtn.addEventListener('click', (e)=> {
	e.preventDefault();
	modal.classList.add('modal__active');
	document.body.classList.add('lock');
	document.body.style.paddingRight = paddingOffset;
	fixBlocks.forEach(item => {
		item.style.paddingRight = paddingOffset;
	});
});
closeBtn.addEventListener('click', ()=> {
	modal.classList.remove('modal__active');
	document.body.classList.remove('lock');
	document.body.style.paddingRight = '0px';
	fixBlocks.forEach(item => {
		item.style.paddingRight = '0px';
	});
});
overlay.addEventListener('click', (e)=> {
	if (e.target == overlay) {
		modal.classList.remove('modal__active');
		document.body.classList.remove('lock');
		document.body.style.paddingRight = '0px';
		fixBlocks.forEach(item => {
			item.style.paddingRight = '0px';
		});
	}
});

// Dynamic adapt 
(function () {
	let originalPositions = [];
	let daElements = document.querySelectorAll('[data-da]');
	let daElementsArray = [];
	let daMatchMedia = [];
	//Заполняем массивы
	if (daElements.length > 0) {
		let number = 0;
		for (let index = 0; index < daElements.length; index++) {
			const daElement = daElements[index];
			const daMove = daElement.getAttribute('data-da');
			if (daMove != '') {
				const daArray = daMove.split(',');
				const daPlace = daArray[1] ? daArray[1].trim() : 'last';
				const daBreakpoint = daArray[2] ? daArray[2].trim() : '767';
				const daType = daArray[3] === 'min' ? daArray[3].trim() : 'max';
				const daDestination = document.querySelector('.' + daArray[0].trim());
				if (daArray.length > 0 && daDestination) {
					daElement.setAttribute('data-da-index', number);
					//Заполняем массив первоначальных позиций
					originalPositions[number] = {
						"parent": daElement.parentNode,
						"index": indexInParent(daElement)
					};
					//Заполняем массив элементов 
					daElementsArray[number] = {
						"element": daElement,
						"destination": document.querySelector('.' + daArray[0].trim()),
						"place": daPlace,
						"breakpoint": daBreakpoint,
						"type": daType
					};
					number++;
				}
			}
		}
		dynamicAdaptSort(daElementsArray);

		//Создаем события в точке брейкпоинта
		for (let index = 0; index < daElementsArray.length; index++) {
			const el = daElementsArray[index];
			const daBreakpoint = el.breakpoint;
			const daType = el.type;

			daMatchMedia.push(window.matchMedia("(" + daType + "-width: " + daBreakpoint + "px)"));
			daMatchMedia[index].addListener(dynamicAdapt);
		}
	}
	//Основная функция
	function dynamicAdapt(e) {
		for (let index = 0; index < daElementsArray.length; index++) {
			const el = daElementsArray[index];
			const daElement = el.element;
			const daDestination = el.destination;
			const daPlace = el.place;
			const daBreakpoint = el.breakpoint;
			const daClassname = "_dynamic_adapt_" + daBreakpoint;

			if (daMatchMedia[index].matches) {
				//Перебрасываем элементы
				if (!daElement.classList.contains(daClassname)) {
					let actualIndex = indexOfElements(daDestination)[daPlace];
					if (daPlace === 'first') {
						actualIndex = indexOfElements(daDestination)[0];
					} else if (daPlace === 'last') {
						actualIndex = indexOfElements(daDestination)[indexOfElements(daDestination).length];
					}
					daDestination.insertBefore(daElement, daDestination.children[actualIndex]);
					daElement.classList.add(daClassname);
				}
			} else {
				//Возвращаем на место
				if (daElement.classList.contains(daClassname)) {
					dynamicAdaptBack(daElement);
					daElement.classList.remove(daClassname);
				}
			}
		}
		customAdapt();
	}

	//Вызов основной функции
	dynamicAdapt();

	//Функция возврата на место
	function dynamicAdaptBack(el) {
		const daIndex = el.getAttribute('data-da-index');
		const originalPlace = originalPositions[daIndex];
		const parentPlace = originalPlace['parent'];
		const indexPlace = originalPlace['index'];
		const actualIndex = indexOfElements(parentPlace, true)[indexPlace];
		parentPlace.insertBefore(el, parentPlace.children[actualIndex]);
	}
	//Функция получения индекса внутри родителя
	function indexInParent(el) {
		var children = Array.prototype.slice.call(el.parentNode.children);
		return children.indexOf(el);
	}
	//Функция получения массива индексов элементов внутри родителя 
	function indexOfElements(parent, back) {
		const children = parent.children;
		const childrenArray = [];
		for (let i = 0; i < children.length; i++) {
			const childrenElement = children[i];
			if (back) {
				childrenArray.push(i);
			} else {
				//Исключая перенесенный элемент
				if (childrenElement.getAttribute('data-da') == null) {
					childrenArray.push(i);
				}
			}
		}
		return childrenArray;
	}
	//Сортировка объекта
	function dynamicAdaptSort(arr) {
		arr.sort(function (a, b) {
			if (a.breakpoint > b.breakpoint) {
				return -1
			} else {
				return 1
			}
		});
		arr.sort(function (a, b) {
			if (a.place > b.place) {
				return 1
			} else {
				return -1
			}
		});
	}
	//Дополнительные сценарии адаптации
	function customAdapt() {
		//const viewport_width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	}
}());

// swiper 
const sliderServices = document.querySelector('.slider-service__content.swiper-container'),
	  sliderFeedback = document.querySelector('.feedback__bottom.swiper-container');


let mySwiper = new Swiper(sliderServices, {
	slidesPerView: 1,
	breakpoints: {
		1300: {
			slidesPerView: 2,
			spaceBetween: 60,
		},
		1730: {
			slidesPerView: 3,
			spaceBetween: 60,
		}
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});
let swiper = new Swiper(sliderFeedback, {
	loop: true,
	breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetween: 55,
		},
		1300: {
			slidesPerView: 2,
			spaceBetween: 60,
		},
		1730: {
			slidesPerView: 3,
			spaceBetween: 55,
		}
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});