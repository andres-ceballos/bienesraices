document.addEventListener('DOMContentLoaded', (e) => {

    eventListeners();

    function eventListeners() {
        document.querySelector('.panel-btn').addEventListener('click', hamburgerMenu);
    }

    //HAMBURGUER BUTTON RESPONSIVE DESIGN
    function hamburgerMenu() {
        document.querySelector('.panel').classList.toggle('is-active');
        document.querySelector('.panel-btn').classList.toggle('is-active');

        if (document.querySelector('html.scroll-disabled')) {
            document.querySelector('html').classList.remove('scroll-disabled');

        } else {
            document.querySelector('html').classList.toggle('scroll-disabled');
        }

        if (document.querySelector('.logo.disabled')) {
            document.querySelector('.logo').classList.toggle('disabled');
        }

    };
});