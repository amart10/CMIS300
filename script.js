const menuIcon = document.querySelector('.hamburger-menu');
const navbar = document.querySelector('.Mnavbar');
const slidecontrols = document.querySelector('.slide-controls');

menuIcon.addEventListener('click', () => {
    navbar.classList.toggle('change');
});