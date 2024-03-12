// ========================== togle navbar icon  ================================
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () =>{
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}



// ========================== togle navbar icon  ================================
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () =>{
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id')

        if(top >= offset && top < offset + height) {
            navLinks.forEach(links =>{
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        }
    });
    // ======================= sticky navbar ==============================================
    let header = document.querySelector('header');
    header.classList.toggle('sticky', window.screenY > 100);


    // ======================= remove togle icon dan navbar saat klik navbar link ==============================================
    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');


};

// ========================== scroll  ================================
ScrollReveal({
    reset: true,
    distance: '80px',
    duration: 2000,
    delay: 100
});

ScrollReveal().reveal('.home-content, .text-animate, .contact img, .heading', { origin: 'top'});
ScrollReveal().reveal('.home-img,  .services-container, .portofolio-box, .contact form', { origin: 'bottom'});
ScrollReveal().reveal('.home-content h1, .about-img,.about .h3', { origin: 'left'});
// ScrollReveal().reveal('.about-content p', { origin: 'right'});

// ========================== multiple text  ================================

const typed = new Typed('.multiple-text', {
    strings: ['Report a problem','Scurity Digital','Bukti insiden ,Dokumentasi'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    _loop: true,
    get loop() {
        return this._loop;
    },
    set loop(value) {
        this._loop = value;
    },   
});


// text effect
let texts = document.querySelector('.texts');
texts.innerHTML = texts.innerText.split('').map((letters, i) => `<span>${letters}</span>`).join('');