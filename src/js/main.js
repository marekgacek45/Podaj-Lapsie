//mobile nav hamburger
const hamburgerBtn = document.querySelector('.hamburger')
const navCollapse = document.querySelector('.nav__collapse')

const mobileNav = () => {
	hamburgerBtn.classList.toggle('is-active')
	navCollapse.classList.toggle('mobile-active')
}

hamburgerBtn.addEventListener('click', mobileNav)