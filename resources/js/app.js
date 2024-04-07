import "./bootstrap";
import "flowbite";
import "./hamburger";
import "./animationObserver";
import "./footerYear";
import "./progressBar";
import "./fancybox";
import './contactScroll'
import './headerBg'

const loader = document.querySelector('#preloader')



window.addEventListener('load', () => {
    loader.style.opacity = '0';
    setTimeout(() => {
        loader.style.display = 'none';
    }, 1000); 
});