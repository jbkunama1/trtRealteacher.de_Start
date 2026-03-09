/**
 * main.js – Basis-JavaScript für realteacher.de
 * Funktionen: mobile Navigation, allgemeine UI-Helfer
 */

// Warten bis das DOM vollständig geladen ist
document.addEventListener('DOMContentLoaded', function () {
    initialisiereMobileNavigation();
    markiereAktiveNavigation();
});

/**
 * Initialisiert das mobile Hamburger-Menü.
 * Toggled die CSS-Klasse 'offen' auf der Navigation.
 */
function initialisiereMobileNavigation() {
    const navToggle = document.getElementById('nav-toggle');
    const mainNav   = document.getElementById('main-nav');

    if (!navToggle || !mainNav) {
        return; // Elemente nicht gefunden – abbrechen
    }

    navToggle.addEventListener('click', function () {
        const istOffen = mainNav.classList.toggle('offen');

        // Barrierefreiheit: aria-expanded aktualisieren
        navToggle.setAttribute('aria-expanded', istOffen ? 'true' : 'false');
        navToggle.setAttribute('aria-label', istOffen ? 'Navigation schließen' : 'Navigation öffnen');
    });

    // Navigation schließen, wenn außerhalb geklickt wird
    document.addEventListener('click', function (ereignis) {
        if (!navToggle.contains(ereignis.target) && !mainNav.contains(ereignis.target)) {
            mainNav.classList.remove('offen');
            navToggle.setAttribute('aria-expanded', 'false');
            navToggle.setAttribute('aria-label', 'Navigation öffnen');
        }
    });

    // Navigation schließen, wenn ein Link angeklickt wird (mobil)
    mainNav.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            mainNav.classList.remove('offen');
            navToggle.setAttribute('aria-expanded', 'false');
        });
    });
}

/**
 * Markiert den aktuell aktiven Navigationslink
 * anhand des aktuellen Seitenpfads.
 */
function markiereAktiveNavigation() {
    const aktuellerPfad = window.location.pathname;
    const navLinks      = document.querySelectorAll('.main-nav a');

    navLinks.forEach(function (link) {
        const linkPfad = new URL(link.href, window.location.origin).pathname;

        // Startseite: exakter Treffer; andere Seiten: starts-with
        if (aktuellerPfad === linkPfad ||
            (linkPfad !== '/' && aktuellerPfad.startsWith(linkPfad))) {
            link.classList.add('aktiv');
        }
    });
}
