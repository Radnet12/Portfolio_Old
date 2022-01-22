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

$(function() {
	$('.header__slider').slick({
		infinite: true,
		fade: true,
		prevArrow: '<img class="slider-arrows slider-arrows__left" src="img/icons/arrow-left.svg" alt="arrow-left"></img>',
		nextArrow: '<img class="slider-arrows slider-arrows__right" src="img/icons/arrow-right.svg" alt="arrow-left"></img>',
		asNavFor: '.slider-dotshead'
	});
	
	$('.slider-dotshead').slick({
		slidesToShow: 4,
		slidesToScroll: 4,
		asNavFor: '.header__slider',
		responsive: [
			{
				breakpoint: 961,
				settings: 'unslick'
			}
		]	
	});
	$('.surf-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: '<img class="slider-arrows slider-arrows__left" src="img/icons/arrow-left.svg" alt="arrow-left"></img>',
		nextArrow: '<img class="slider-arrows slider-arrows__right" src="img/icons/arrow-right.svg" alt="arrow-left"></img>',
		asNavFor: '.slider-map',
		infinite: true,
		responsive: [
			{
				breakpoint: 1210,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 900,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 720,
				settings: {
					slidesToShow: 1,
					centerMode: true
				}
			},
			{
				breakpoint: 426,
				settings: {
					slidesToShow: 1,
					centerMode: false
				}
			}
		]	
	});
	$('.slider-map').slick({
		slidesToShow: 8,
		slidesToScroll: 1,
		arrows: false,
		asNavFor: '.surf-slider',
		focusOnSelect: true,
		responsive: [
			{
				breakpoint: 1102,
				settings: {
					slidesToShow: 3,
					infinite: true,
				}
			},
			{
				breakpoint: 900,
				settings: {
					slidesToShow: 2,
					centerMode: true
				}
			},
			{
				breakpoint: 720,
				settings: {
					slidesToShow: 1,
					centerMode: true
				}
			}
		]
	});
	$('.holder__slider, .shop__slider').slick({
		infinite: true,
		fade: true,
		prevArrow: '<img class="slider-arrows slider-arrows__left" src="img/icons/arrow-left.svg" alt="arrow-left"></img>',
		nextArrow: '<img class="slider-arrows slider-arrows__right" src="img/icons/arrow-right.svg" alt="arrow-left"></img>',
	});
	$('<div class="quantity-nav"><div class="quantity-button quantity-up"><img src="img/icons/plus.svg" alt=""></div><div class="quantity-button quantity-down"><img src="img/icons/minus.svg" alt=""></div></div>').insertAfter('.quantity input');
	$('.quantity').each(function () {
		var spinner = $(this),
			input = spinner.find('input[type="number"]'),
			btnUp = spinner.find('.quantity-up'),
			btnDown = spinner.find('.quantity-down'),
			min = input.attr('min'),
			max = input.attr('max');

		btnUp.click(function () {
			var oldValue = parseFloat(input.val());
			if (oldValue >= max) {
				var newVal = oldValue;
			} else {
				var newVal = oldValue + 1;
			}
			spinner.find("input").val(newVal);
			spinner.find("input").trigger("change");
		});

		btnDown.click(function () {
			var oldValue = parseFloat(input.val());
			if (oldValue <= min) {
				var newVal = oldValue;
			} else {
				var newVal = oldValue - 1;
			}
			spinner.find("input").val(newVal);
			spinner.find("input").trigger("change");
		});

	});
		
	$('.quantity-button').on('click', function() {
		let sum = $('.night').val() * $('.sum').data('night') + ($('.guest').val() - 1) * $('.sum').data('guest');

		$('.sum').html('$' + sum);
	});
	$('.surfboard-box__circle').on('click', function(){
		$(this).toggleClass('active')
	});
	$('.menu-btn').on('click', function() {
		$('.header__aside_menu').toggleClass('active');
	});
	new WOW().init();
});