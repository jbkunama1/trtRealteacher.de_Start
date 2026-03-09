<?php
/**
 * index.php – Landingpage von realteacher.de
 * Einbindung von Header und Footer aus /src/templates/
 */

// Seitenvariablen für header.php
$seitentitel        = 'realteacher.de – Ihr Portal für digitale Bildung und Innovation';
$seitenbeschreibung = 'realteacher.de – Ihr Portal für digitale Bildung und Innovation in Baden-Württemberg. Technik, WBS/BO, Sport und digitale Tools.';

// Templates einbinden (Pfad relativ zu /public/)
require_once __DIR__ . '/../src/templates/header.php';
?>

<!-- ============ HERO-BEREICH ============ -->
<section class="hero">
    <div class="container">
        <h1>Ihr Portal für digitale Bildung und Innovation.</h1>
        <p>
            Unterrichtsmaterialien, Projekte und Tools für Technik, WBS/BO und Sport –
            made in Baden-Württemberg.
        </p>
    </div>
</section>
<!-- ============ /HERO-BEREICH ============ -->

<!-- ============ HINWEIS-BANNER ============ -->
<div class="container">
    <div class="hinweis-banner">
        <strong>🚧 Diese Seite wird gerade neu aufgebaut 🚧</strong>
        Wir sind dabei, realteacher.de komplett zu erneuern. Vielen Dank für Ihre Geduld –
        bald gibt es hier jede Menge neues Material!
    </div>
</div>
<!-- ============ /HINWEIS-BANNER ============ -->

<!-- ============ INHALTS-BOXEN ============ -->
<section class="bereich-boxen">
    <div class="container">
        <h2>Bereiche im Überblick</h2>
        <div class="boxen-grid">

            <!-- Box: Technik-Projekte -->
            <div class="box">
                <div class="box-icon">⚙️</div>
                <h3>Technik-Projekte</h3>
                <p>
                    Unterrichtsprojekte und Materialien für das Fach Technik –
                    von Schaltkreisen bis zur Digitaltechnik.
                </p>
                <a href="technik.php" class="box-link">Mehr erfahren</a>
            </div>

            <!-- Box: WBS/BO-Material -->
            <div class="box">
                <div class="box-icon">📋</div>
                <h3>WBS/BO-Material</h3>
                <p>
                    Arbeitsblätter, Vorlagen und Ressourcen für Wirtschaft,
                    Berufs- und Studienorientierung.
                </p>
                <a href="wbs.php" class="box-link">Mehr erfahren</a>
            </div>

            <!-- Box: Digitale Tools -->
            <div class="box">
                <div class="box-icon">🛠️</div>
                <h3>Digitale Tools</h3>
                <p>
                    Hilfreiche Online-Werkzeuge und Apps für den modernen
                    Unterrichtsalltag.
                </p>
                <a href="tools.php" class="box-link">Mehr erfahren</a>
            </div>

        </div><!-- /.boxen-grid -->
    </div><!-- /.container -->
</section>
<!-- ============ /INHALTS-BOXEN ============ -->

<?php
require_once __DIR__ . '/../src/templates/footer.php';
?>
