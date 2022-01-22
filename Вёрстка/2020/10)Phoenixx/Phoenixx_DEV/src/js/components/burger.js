const burger = () => {
    const burgerBtn = document.querySelector('.header__burger'),
          navWindow = document.querySelector('.header__nav'),
          navBtn = navWindow.querySelectorAll('a'),
          body = document.body;

    burgerBtn.addEventListener('click', () => {
        burgerBtn.classList.toggle('header__burger--active');
        navWindow.classList.toggle('header__nav--active');
        body.classList.toggle('lock');
    });
    navBtn.forEach(item => {
        item.addEventListener('click', (e) => {
            if (e.target == item) {
                burgerBtn.classList.remove('header__burger--active');
                navWindow.classList.remove('header__nav--active');
                body.classList.remove('lock');
            }
        });
    });
    
};

export default burger;