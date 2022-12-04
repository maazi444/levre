// Header

var className = "inverted";
var scrollTrigger = 60;

window.onscroll = function () {
    // We add pageYOffset for compatibility with IE.
    if (
        window.scrollY >= scrollTrigger ||
        window.pageYOffset >= scrollTrigger
    ) {
        document.getElementsByTagName("header")[0].classList.add(className);
        document.getElementsByTagName("header")[0].style.padding = "1em 4em";
    } else {
        document.getElementsByTagName("header")[0].classList.remove(className);
        document.getElementsByTagName("header")[0].style.padding = "2em 4em";
    }
};

// Header Mobile Menu

let mobileNavBtn = document.querySelector(".header__mobileBtn");
let mobileNav = document.querySelector(".header__mobileNav");

mobileNavBtn.addEventListener("click", () => {
    mobileNav.classList.toggle("mobile_nav_active");
});
