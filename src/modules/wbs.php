<?php
/**
 * wbs.php – Platzhalterseite für den Bereich Wirtschaft / Berufs- und Studienorientierung
 * Inhalt wird in zukünftigen Iterationen ergänzt.
 */

$seitentitel        = 'WBS/BO – Wirtschaft, Berufs- und Studienorientierung – realteacher.de';
$seitenbeschreibung = 'Materialien für Wirtschaft, Berufs- und Studienorientierung in Baden-Württemberg.';

require_once __DIR__ . '/../templates/header.php';
?>

<main class="platzhalter-seite">
    <div class="container">
        <div class="box-icon" style="font-size: 3.5rem; text-align: center; margin-bottom: 1rem;">📋</div>
        <h1>WBS / Berufs- und Studienorientierung</h1>
        <p>
            Dieser Bereich befindet sich noch im Aufbau.
        </p>
        <p>
            Hier werden bald Arbeitsblätter, Vorlagen und Ressourcen für
            <strong>Wirtschaft, Berufs- und Studienorientierung (WBS/BO)</strong>
            bereitgestellt – abgestimmt auf den Bildungsplan Baden-Württemberg.
        </p>
        <p>Geplante Inhalte:</p>
        <ul style="list-style: disc inside; color: #5f6368; margin: 1rem auto; max-width: 400px; text-align: left;">
            <li>Bewerbungstraining &amp; Lebenslauf-Vorlagen</li>
            <li>Berufsfelderkundung &amp; Praktikumsberichte</li>
            <li>Wirtschaftliche Grundbegriffe</li>
            <li>Studienorientierung &amp; Hochschulwahl</li>
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
