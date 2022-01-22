// Бургер и убирание его по клику в любом месте
$(document).ready(function() {
	$('.header__burger').on('click', function() {
		$('.header__burger, .header__navbar_burger').toggleClass('active');
	});
});
  $(document).mouseup(function(e) {
        var $target = $(e.target);
        if ($target.closest("nav").length === 0) {
            $(".header__burger, .header__navbar_burger").removeClass("active");
        }
    });
// Бургер и убирание его по клику в любом месте


// Фиксированная шапка
let header = $('.js-header-wrapper'),
	cloneHeader = header.clone();

	cloneHeader.addClass('header__wrapper_fixed');
header.before(cloneHeader);

$(window).scroll(function() {
	if ( $(window).scrollTop() > 250) {
		cloneHeader.addClass('header__wrapper_fixed_shown');
	} else {
		cloneHeader.removeClass('header__wrapper_fixed_shown');
	}
});

let jsbg =$('.header__js-bg')

$(window).scroll(function() {
	if ( $(window).scrollTop() > 250) {
		jsbg.addClass('bgcolor');
	} else {
		jsbg.removeClass('bgcolor');
	}
});
// Фиксированная шапка


//слайдер
$(document).ready(function() {
	$('.feedback__slider').slick({
		adaptiveHeight:true,
		slidesToShow:3,
		arrows:true,
		centerMode: true,
		responsive:[{
			breakpoint: 992,
			settings: {
				slidesToShow:1,
				centerMode: false
			}
		}]
	});
});
