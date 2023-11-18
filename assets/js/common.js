window.addEventListener("load", function () {
    const hamburger_button = document.querySelector(".hamburger-button");
    const hamburger_menu = document.querySelector(".hamburger-menu-wrapper");

    hamburger_button.addEventListener("click", function () {
        this.classList.toggle("is-active");
        hamburger_menu.classList.toggle("is-open");
    });
});
