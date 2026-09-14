/**
 * Anuncero Prensa Main Frontend Logic
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const primaryMenu = document.getElementById('primary-menu');

    if (menuToggle && primaryMenu) {
        menuToggle.addEventListener('click', () => {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            primaryMenu.classList.toggle('toggled');
        });
    }

    // 2. Intersection Observer for Staggered Reveal (Cards)
    const cards = document.querySelectorAll('.post-card');
    if (cards.length > 0) {
        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -50px 0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Slight delay based on index for stagger effect in grid
                    const delay = (Array.from(cards).indexOf(entry.target) % 3) * 100;
                    setTimeout(() => {
                        entry.target.classList.add('is-visible');
                    }, delay);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        cards.forEach(card => observer.observe(card));
    }
});
