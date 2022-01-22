const gsapAnim = () => {
    let tlMain = gsap.timeline();
    tlMain.from('.main__title', {y: 50, opacity: 0, duration: 0.7 })
      .from('.main__subtitle', {y: 50, opacity: 0, duration: 0.7 }, '-=0.4')
      .from('.main__btn', {y: 50, opacity: 0, duration: 0.7 }, '-=0.4')
      .from('.main__banner', {xPercent: -100, opacity: 0, duration: 1.5 }, '-=0.5')
      .from('.header__item', {y: -100, opacity: 0, duration: 1.5, stagger: 0.5 }, '-=3')


    gsap.from(".why__item", {
        scrollTrigger: {
            trigger: ".why__wrapper",
            start: "top 50%"
        },
        y: 50,
        opacity: 0,
        stagger: 0.3
    });

    let tlDiscount = gsap.timeline({
        scrollTrigger: {
            trigger: ".discount",
            start: "top 40%"
        }
    });
    tlDiscount.from('.discount', {opacity: 0, duration: 1})
              .from(".discount__offer", {y: 50, opacity: 0, duration: 1}, '-=0.5')
              .from(".discount__form", {xPercent: 100, opacity: 0, duration: 1}, '-=1')
              .from(".discount__input", {opacity: 0, duration: 1, stagger: 0.2})
              .from(".discount__btn", {opacity: 0, duration: 1}, '-=0.8')


    gsap.from('.services__item', {
        scrollTrigger: {
            trigger: ".services__wrapper",
            start: "top 40%"
        },
        xPercent: 50,
        opacity: 0,
        duration: 1,
        stagger: 0.3
    });

    gsap.from('.clean', {
        scrollTrigger: {
            trigger: ".clean",
            start: "top 50%"
        },
        opacity: 0,
        duration: 1.5
    });


    let tlSteps = gsap.timeline({
        scrollTrigger: {
            trigger: ".steps__wrapper",
            start: "top 60%"
        }
    });
    tlSteps.from('.steps__item', {opacity: 0, duration: 1, stagger: 0.3})
           .from('.steps__title', {opacity: 0, duration: 1, stagger: 0.3}, "-=1.8")
           .from('.steps__text', {opacity: 0, duration: 1, stagger: 0.3}, "-=1.6")


    gsap.from('.feedback', {
        scrollTrigger: {
            trigger: ".feedback",
            start: "top 50%"
        },
        opacity: 0,
        duration: 1.5
    });

    let tlContact = gsap.timeline({
        scrollTrigger: {
            trigger: ".contact__wrapper",
            start: "top 70%"
        }
    });

    tlContact.from('.contact__wrapper', {opacity: 0, duration: 1, y: 100})
             .from('.contact__title', {opacity: 0, duration: 1, y: 50}, "-=0.6")
             .from('.contact__text', {opacity: 0, duration: 1, y: 50}, "-=0.6")
             .from('.contact__input', {opacity: 0, duration: 1, y: 50, stagger: 0.3}, "-=0.6")
             .from('.contact__btn', {opacity: 0, duration: 1, y: 50}, "-=0.6")

    gsap.from('.footer', {
        scrollTrigger: {
            trigger: ".footer",
            start: "top 90%"
        },
        opacity: 0,
        duration: 1.5
    });
}
export default gsapAnim;