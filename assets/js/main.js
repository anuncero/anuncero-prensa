/**
 * Anuncero Prensa Main Frontend Logic
 */

document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu toggle logic
    const menuToggle = document.querySelector('.menu-toggle');
    const primaryMenu = document.getElementById('primary-menu');

    if (menuToggle && primaryMenu) {
        menuToggle.addEventListener('click', () => {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            primaryMenu.classList.toggle('toggled');
        });
    }
});
