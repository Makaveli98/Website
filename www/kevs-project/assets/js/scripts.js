// const navSlide = () => {
//     const toggleButtonMenu = document.querySelector('.toggle-button-menu');
//     const nav = document.querySelector('.nav-links');
//     const navLinks = document.querySelectorAll('.nav-links li');

//     toggleButtonMenu.addEventListener('click', () => {
//         nav.classList.toggle('nav-active');

//     });

//     navLinks.forEach((link, index)=> {
//         link.style.animation = 'navLinkFade 0.5s ease forwards ${index / 7 + .3}s';
//         console.log(index / 7);
//     });

// }

// navSlide();

function backToPage() {
    const button = document.querySelector('.page-back-button');
    button.addEventListener('click', ()=> {
        window.location.href = 'artists.php';
    });
}

function popUpButton() {
    const popButton = document.querySelector('.pop-up-button');
    const textHolder = document.querySelector('.text-holder');
    const figureDiv = document.querySelector('figure');

    popButton.addEventListener('click', ()=> {
        textHolder.classList.toggle('text-appear');
        figureDiv.classList.toggle('move-to-left');
    });
}

function toggleMenu() {
    const menuBtn = document.querySelector('.menu-button-container');
    const navLinks = document.querySelector('.nav-links');
    const logo = document.querySelector('.logo');

    menuBtn.addEventListener('click', ()=> {
        navLinks.classList.toggle('toggle-nav-links');
        logo.classList.toggle('display-logo');
    });
}

function executeFunctions() {
    backToPage();
    popUpButton();
    // toggleMenu();
}
toggleMenu();
executeFunctions();