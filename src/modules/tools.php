<?php
/**
 * tools.php – Platzhalterseite für den Bereich Digitale Tools
 * Inhalt wird in zukünftigen Iterationen ergänzt.
 */

$seitentitel        = 'Digitale Tools – realteacher.de';
$seitenbeschreibung = 'Hilfreiche digitale Werkzeuge und Apps für den modernen Unterrichtsalltag.';

require_once __DIR__ . '/../templates/header.php';
?>

<main class="platzhalter-seite">
    <div class="container">
        <div class="box-icon" style="font-size: 3.5rem; text-align: center; margin-bottom: 1rem;">🛠️</div>
        <h1>Digitale Tools</h1>
        <p>
            Dieser Bereich befindet sich noch im Aufbau.
        </p>
        <p>
            Hier werden bald hilfreiche <strong>digitale Werkzeuge und Apps</strong>
            für den modernen Unterrichtsalltag vorgestellt und verlinkt.
        </p>
        <p>Geplante Inhalte:</p>
        <ul style="list-style: disc inside; color: #5f6368; margin: 1rem auto; max-width: 400px; text-align: left;">
            <li>Kollaboration: Miro, Padlet, BSCW</li>
            <li>Präsentation: Canva, Genially</li>
            <li>Quiztools: LearningApps, Quizlet, Kahoot</li>
            <li>Feedback &amp; Abstimmung: Mentimeter, Slido</li>
            <li>KI-Tools im Unterricht – sicher und sinnvoll</li>
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
