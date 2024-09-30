document.addEventListener('DOMContentLoaded', function () {

    //burger
    const openButton = document.querySelector('#burger');
    const mobileMenu = document.querySelector('#menu');
    const closeButton = document.querySelector('#closeMenu');

    openButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    closeButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });


    //modal
    const modal = document.getElementById('modal');
    const openModalButton = document.getElementById('open-modal');
    const openModalButtonBurger = document.getElementById('open-modal-');
    const closeModalButton = document.getElementById('close-modal');
    const overlay = modal.querySelector('.bg-black');

    openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });
    openModalButtonBurger.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });
    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    overlay.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
});
