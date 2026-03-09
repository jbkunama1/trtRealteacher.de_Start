<?php
/**
 * technik.php – Platzhalterseite für den Bereich Technik
 * Inhalt wird in zukünftigen Iterationen ergänzt.
 */

$seitentitel        = 'Technik-Projekte – realteacher.de';
$seitenbeschreibung = 'Unterrichtsprojekte und Materialien für das Fach Technik in Baden-Württemberg.';

require_once __DIR__ . '/../templates/header.php';
?>

<main class="platzhalter-seite">
    <div class="container">
        <div class="box-icon" style="font-size: 3.5rem; text-align: center; margin-bottom: 1rem;">⚙️</div>
        <h1>Technik-Projekte</h1>
        <p>
            Dieser Bereich befindet sich noch im Aufbau.
        </p>
        <p>
            Hier werden bald Unterrichtsmaterialien, Projekte und Ressourcen
            für das Fach <strong>Technik</strong> bereitgestellt –
            abgestimmt auf den Bildungsplan Baden-Württemberg.
        </p>
        <p>Geplante Inhalte:</p>
        <ul style="list-style: disc inside; color: #5f6368; margin: 1rem auto; max-width: 400px; text-align: left;">
            <li>Schaltungstechnik &amp; Elektronik</li>
            <li>Digitaltechnik &amp; Microcontroller</li>
            <li>Konstruktion &amp; CAD-Grundlagen</li>
            <li>Technik und Gesellschaft</li>
        </ul>
        <a href="/index.php" class="box-link" style="
            display: inline-block; margin-top: 1.5rem;
            padding: 0.5rem 1rem;
            background: #1a73e8; color: white;
            border-radius: 8px; font-weight: 500;">
            ← Zurück zur Startseite
        </a>
    </div>
</main>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>
