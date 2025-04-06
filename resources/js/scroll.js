document.addEventListener('DOMContentLoaded', () => {
    // Vyhledání všech sekcí, které mají být animovány
    const sections = document.querySelectorAll('.animate-on-scroll');

    // Nastavení Intersection Observer
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Přidání třídy pro animaci, když je sekce viditelná
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Odstranění pozorování po animaci
            }
        });
    }, {
        threshold: 0.2, // Spustí animaci, když je 20 % sekce viditelné
    });

    // Přidání pozorování na každou sekci
    sections.forEach(section => {
        observer.observe(section);
    });
});