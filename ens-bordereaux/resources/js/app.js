import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

const cursorDot = document.getElementById('cursor-dot');

if (cursorDot) {
    window.addEventListener('mousemove', (e) => {
        cursorDot.style.transform = `translate(${e.clientX - 8}px, ${e.clientY - 8}px)`;
    });
}
Alpine.start();
document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.cursor-glow-card');

    cards.forEach((card) => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            card.style.setProperty('--x', `${x}px`);
            card.style.setProperty('--y', `${y}px`);
        });
    });

    const cursorDot = document.getElementById('cursor-dot');

    if (cursorDot) {
        window.addEventListener('mousemove', (e) => {
            cursorDot.style.transform = `translate(${e.clientX - 8}px, ${e.clientY - 8}px)`;
        });
    }
});
