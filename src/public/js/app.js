document.addEventListener('DOMContentLoaded', (e) => {

    eventListeners();

    function eventListeners() {
        document.querySelector('.panel-btn').addEventListener('click', hamburgerMenu);
    }

    //HAMBURGUER BUTTON RESPONSIVE DESIGN
    function hamburgerMenu() {

        //SHOW GRAY PANEL BACKGROUND IN MOVIL MODE
        document.querySelector('.panel').classList.toggle('is-active');
        document.querySelector('.panel-btn').classList.toggle('is-active');

        //ALLOWS SCROLL IN NORMAL MODE OR AVOID SCROLL DURING SHOW PANEL IN MOVIL MODE
        if (document.querySelector('html.scroll-disabled')) {
            document.querySelector('html').classList.remove('scroll-disabled');

        } else {
            document.querySelector('html').classList.toggle('scroll-disabled');
        }

        //ADD/REMOVE CLASS .DISABLED FOR HIDE/SHOW LOGO BIENESRAICES IN PANEL FOR MOVIL MODE
        if (document.querySelector('.logo.disabled')) {
            document.querySelector('.logo').classList.toggle('disabled');
        }
    };
});