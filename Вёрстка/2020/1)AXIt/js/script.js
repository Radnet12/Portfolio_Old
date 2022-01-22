'use strict';
$(document).ready(function () {
	$('.burger').on('click', function () {
		$('.burger, .navbar').toggleClass('active');
		$('body').toggleClass('lock');
	});

	
});
// tabs

const tabs = document.querySelectorAll('.tab__column_item'),
	tabsContent = document.querySelectorAll('.tabs__offer'),
	tabsParent = document.querySelector('.tab__column');

function hideTabContent() {
	tabsContent.forEach(item => {
		item.style.display = "none";
	});
}

function showTabContent(i = 0) {
	tabsContent[i].style.display = "initial";
}

hideTabContent();
showTabContent();

tabsParent.addEventListener('click', e => {
	if (e.target && e.target.classList.contains('tab__column_item')) {
		tabs.forEach((item, i) => {
			if (e.target == item) {
				hideTabContent();
				showTabContent(i);
			}
		});
	}
});