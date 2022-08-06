document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');
    const intro = document.querySelector('.intro');
    window.addEventListener('scroll', () => {
        let scrollTop = window.scrollY;
        let introCenter = intro.offsetHeight /10;

        if (scrollTop >= introCenter ) {
            navbar.classList.add('midfix')
            intro.style.marginTop = '${navbar.offsetHeight}px';
        } else{
            navbar.classList.remove('midfix')
            intro.style.marginTop = '150px';
        }
    })
})