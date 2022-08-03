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
            intro.style.marginTop = '0px';
        }
    })
})

document.querySelectorAll('.navbar').forEach(link =>{
    link.addEventListener('click', function (e) {
        e.preventDefault()

        const href = this.getAttribute('.navbar').substring(1)

        const scrollTarget = document.getElementById('.navbar')

        const topOffset = document.querySelector('myheader')
        offsetHeight
        const elementPosition = scrollTarget
        getBaundingClientRect().top
        const offsetHeight = elementPosition - topOffset

        window.scrollBy({
            top: offsetPosition,
            behavior: 'smooth'
        })
    })
})