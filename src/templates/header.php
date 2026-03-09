<?php
/**
 * header.php – Gemeinsamer HTML-Kopfbereich und Navigation
 * Wird in alle Seiten per require_once eingebunden.
 *
 * Erwartet folgende Variablen (können vor dem Include gesetzt werden):
 *   $seitentitel  (string) – Titel des Browser-Tabs
 *   $seitenbeschreibung (string) – Meta-Description
 */

// Standardwerte, falls nicht gesetzt
$seitentitel        = $seitentitel        ?? 'realteacher.de – Digitale Bildung';
$seitenbeschreibung = $seitenbeschreibung ?? 'Portal für digitale Bildung und Innovation in Baden-Württemberg.';

// Basis-URL relativ zum public-Verzeichnis ermitteln
$basisPfad = '/';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($seitenbeschreibung) ?>">
    <meta name="author"      content="realteacher.de">
    <title><?= htmlspecialchars($seitentitel) ?></title>

    <!-- Haupt-Stylesheet -->
    <link rel="stylesheet" href="<?= $basisPfad ?>assets/css/main.css">
</head>
<body>

<!-- ============ SITE HEADER ============ -->
<header class="site-header">
    <div class="header-inner">

        <!-- Logo / Seitenname -->
        <a href="<?= $basisPfad ?>index.php" class="site-logo">
            real<span>teacher</span>.de
        </a>

        <!-- Hamburger-Button (nur mobil sichtbar) -->
        <button
            id="nav-toggle"
            class="nav-toggle"
            aria-label="Navigation öffnen"
            aria-expanded="false"
            aria-controls="main-nav"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Haupt-Navigation -->
        <nav id="main-nav" class="main-nav" aria-label="Hauptnavigation">
            <ul>
                <li><a href="<?= $basisPfad ?>index.php">Startseite</a></li>
                <li><a href="<?= $basisPfad ?>technik.php">Technik</a></li>
                <li><a href="<?= $basisPfad ?>wbs.php">WBS/BO</a></li>
                <li><a href="<?= $basisPfad ?>sport.php">Sport</a></li>
                <li><a href="<?= $basisPfad ?>tools.php">Digitale Tools</a></li>
            </ul>
        </nav>

    </div><!-- /.header-inner -->
</header>
<!-- ============ /SITE HEADER ============ -->
