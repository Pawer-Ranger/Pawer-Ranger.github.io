// hamburger.js or menu.js

document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.hamburger').addEventListener('click', function() {
        this.classList.toggle('active');
        document.querySelector('.nav-links').classList.toggle('active');
    });
});
