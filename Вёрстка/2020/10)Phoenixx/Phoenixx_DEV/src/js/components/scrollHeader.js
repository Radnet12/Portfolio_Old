const scrollHeader = () => {
    const header = document.querySelector('.header'),
          headerLinks = header.querySelectorAll('a');
    
    window.addEventListener('scroll', () => {
        let scroll = window.pageYOffset;
        
        if(scroll > 0) {
            header.style.height = '60px';
            headerLinks.forEach(link => {
                link.style.padding = '18px 0';
            });
        } else {
            header.style.height = '';
            headerLinks.forEach(link => {
                link.style.padding = '';
            });
        }
    });
};

export default scrollHeader;