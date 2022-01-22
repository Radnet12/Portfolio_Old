const burger = () => {
    const nav = document.querySelector('.header__nav'),
        burgerBtn = document.querySelector('.header__burger'),
        body = document.body;

    burgerBtn.addEventListener('click', (e) => {
        if (e.target) {
            burgerBtn.classList.toggle('header__burger--active');
            nav.classList.toggle('header__nav--active');
            body.classList.toggle('lock');
        }
    });
};
export default burger;