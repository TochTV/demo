


const menuToggle = document.querySelector('#menu-togle');
const mobileNavLinkMain = document.querySelector ('#mobile-nav-main__item')
const mobileNavLinkAbout = document.querySelector ('#mobile-nav-about__item')
const mobileNavLinkProduct = document.querySelector ('#mobile-nav-product__item')
const mobileNavLinkDilivery = document.querySelector ('#mobile-nav-dilivery__item')
const mobileNavLinkGalary = document.querySelector ('#mobile-nav-galary__item')
const mobileNavContainer = document.querySelector('#mobile-nav')


menuToggle.onclick = function(){
    menuToggle.classList.toggle('menu-icon-active');
    mobileNavContainer.classList.toggle('mobile-nav--active');
}


mobileNavLinkMain.onclick = function(){
    mobileNavContainer.classList.toggle('mobile-nav--active');
    menuToggle.classList.toggle('menu-icon-active');
}
mobileNavLinkAbout.onclick = function(){
    mobileNavContainer.classList.toggle('mobile-nav--active');
    menuToggle.classList.toggle('menu-icon-active');
}
mobileNavLinkProduct.onclick = function(){
    mobileNavContainer.classList.toggle('mobile-nav--active');
    menuToggle.classList.toggle('menu-icon-active');
}
mobileNavLinkDilivery.onclick = function(){
    mobileNavContainer.classList.toggle('mobile-nav--active');
    menuToggle.classList.toggle('menu-icon-active');
}
mobileNavLinkGalary.onclick = function(){
    mobileNavContainer.classList.toggle('mobile-nav--active');
    menuToggle.classList.toggle('menu-icon-active');
}







