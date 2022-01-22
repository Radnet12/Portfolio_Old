const tabs = (tabsParentSelector, tabsSelector, tabsContentSelector, activeClass) => {
    const tabsParent = document.querySelector(tabsParentSelector),
          tabs = tabsParent.querySelectorAll(tabsSelector),
          tabsContent = document.querySelectorAll(tabsContentSelector);

    function hideTabContent() {
        tabs.forEach(item => {
            item.classList.remove(activeClass);
        });
        tabsContent.forEach(item => {
            item.style.display = 'none';
        });
    }
    function showTabContent(i = 0) {
        tabs[i].classList.add(activeClass);
        tabsContent[i].style.display = '';
    }
    hideTabContent();
    showTabContent();
    tabsParent.addEventListener('click', (e) => {
        e.preventDefault();
        if (e.target && e.target.classList.contains('tabs-nav__item-link')) {
            tabs.forEach((item, i) => {
                if (e.target.closest('.tabs-nav__item') == item) {
                    hideTabContent();
                    showTabContent(i);
                }
            });
        }
    });
};

export default tabs;