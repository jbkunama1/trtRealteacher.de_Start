<?php
/**
 * sport.php – Platzhalterseite für den Bereich Sport
 * Inhalt wird in zukünftigen Iterationen ergänzt.
 */

$seitentitel        = 'Sport – realteacher.de';
$seitenbeschreibung = 'Unterrichtsmaterialien und Projekte für das Fach Sport in Baden-Württemberg.';

require_once __DIR__ . '/../templates/header.php';
?>

<main class="platzhalter-seite">
    <div class="container">
        <div class="box-icon" style="font-size: 3.5rem; text-align: center; margin-bottom: 1rem;">🏃</div>
        <h1>Sport</h1>
        <p>
            Dieser Bereich befindet sich noch im Aufbau.
        </p>
        <p>
            Hier werden bald Unterrichtsmaterialien, Stundenentwürfe und digitale
            Ressourcen für das Fach <strong>Sport</strong> bereitgestellt –
            abgestimmt auf den Bildungsplan Baden-Württemberg.
        </p>
        <p>Geplante Inhalte:</p>
        <ul style="list-style: disc inside; color: #5f6368; margin: 1rem auto; max-width: 400px; text-align: left;">
            <li>Stundenentwürfe &amp; Unterrichtsreihen</li>
            <li>Regelkunde verschiedener Sportarten</li>
            <li>Theoriematerial Sportbiologie</li>
            <li>Bewertungsbögen &amp; Checklisten</li>
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
