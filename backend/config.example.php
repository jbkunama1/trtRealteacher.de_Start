<?php
/**
 * config.example.php – Beispielkonfiguration für realteacher.de
 *
 * ANLEITUNG:
 *   1. Diese Datei kopieren: cp config.example.php config.php
 *   2. config.php mit den eigenen Werten befüllen
 *   3. config.php NIEMALS ins Git-Repository einchecken!
 *      (Sie ist bereits in .gitignore eingetragen)
 */

// ---- Datenbank ----

/** Absoluter Pfad zur SQLite-Datenbankdatei */
define('DB_PFAD', __DIR__ . '/../database/realteacher.sqlite');

// ---- Anwendungseinstellungen ----

/** Basis-URL der Anwendung (ohne abschließenden Slash) */
define('BASIS_URL', 'https://www.realteacher.de');

/** Umgebung: 'entwicklung' oder 'produktion' */
define('UMGEBUNG', 'entwicklung');

/** Zeitzone (Standard: Europa/Berlin) */
date_default_timezone_set('Europe/Berlin');

// ---- Debugging ----
// Im Produktivbetrieb BEIDE Zeilen auf 0 setzen!
if (defined('UMGEBUNG') && UMGEBUNG === 'entwicklung') {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
    error_reporting(0);
}
