const header = document.getElementById("header"),
    navMenu = document.getElementById("nav-menu"),
    navToggle = document.getElementById("nav-toggle"),
    navClose = document.getElementById("nav-close"),
    navLink = document.getElementsByClassName("nav__link");

// Hide/visible menu mobile
if (navToggle) {
    navToggle.addEventListener("click", () => {
        navMenu.classList.replace("top-[-100vh]", "top-0");
    });
}

if (navClose) {
    navClose.addEventListener("click", () => {
        navMenu.classList.replace("top-0", "top-[-100vh]");
    });
}

// Hide nav__menu if nav__link is clicked
Array.from(navLink).forEach((e) => {
    e.addEventListener("click", () => {
        navMenu.classList.replace("top-0", "top-[-100vh]");
    });
});

// Add shadow to header while scrollY > 50
window.addEventListener("scroll", function () {
    if (this.scrollY > 50) {
        header.classList.add("shadow-md");
    } else {
        header.classList.remove("shadow-md");
    }
});
