const faqList = document.querySelectorAll('.faq__list');

faqList.forEach(list  => {
    list.addEventListener('click', (e) => {
        if (e.target && e.target.classList.contains('faq__item')) {
            const dropdown = e.target.querySelector('.faq__dropdown');
            if (e.target.classList.contains('faq__item--active')) {
                e.target.classList.remove('faq__item--active')
                dropdown.classList.remove('active');
                dropdown.style.maxHeight = 0;
                dropdown.style.padding = 0;
            } else {
                e.target.classList.add('faq__item--active')
                dropdown.classList.add('active');
                dropdown.style.maxHeight = dropdown.scrollHeight + 20 + "px";
                dropdown.style.padding = '20px 0 0 20px';
            }
        }
    });
});