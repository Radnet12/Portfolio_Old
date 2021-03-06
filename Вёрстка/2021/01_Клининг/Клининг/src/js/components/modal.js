const modals = () => {
    function actionsWithModal(modal, isAdd) {
        const windows = document.querySelectorAll('[data-modal]'),
              body = document.body;
        let paddingScroll = window.innerWidth - document.documentElement.clientWidth;

        windows.forEach(window => {
            window.classList.add('hide');
        });

        if (isAdd === 'yes') {
            modal.classList.add('show');
            body.classList.add('lock');
            body.style.marginRight = `${paddingScroll}px`;
        } else {
            modal.classList.remove('show');
            body.classList.remove('lock');
            body.style.marginRight = `0px`;
        }
    }

    function bindModal(triggerSelector, modalSelector, closeSelector, closeOverOverlay = true) {
        const triggers = document.querySelectorAll(triggerSelector),
              modal = document.querySelector(modalSelector),
              close = document.querySelector(closeSelector);
              

        triggers.forEach(trigger => {
            trigger.addEventListener('click', (e) => {
                if (e.target) {
                    e.preventDefault();
                }
                actionsWithModal(modal, 'yes');
            });
        });

        close.addEventListener('click', () => {
            actionsWithModal(modal, 'no');
        });

        modal.addEventListener('click', (e) => {
            if (e.target === modal && closeOverOverlay) {
                actionsWithModal(modal, 'no');
            }
        });
    }

    function showModalByTime(selector, time) {
        setTimeout(() => {
            const modal = document.querySelector(selector);
            modal.classList.add('show');
            document.body.classList.add('lock');
        }, time);
    }
};
export default modals;