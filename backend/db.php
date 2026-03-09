<?php
/**
 * db.php – SQLite-Datenbankverbindung
 *
 * Stellt eine PDO-Verbindung zur SQLite-Datenbank bereit.
 * Wird in anderen Backend-Skripten per require_once eingebunden.
 *
 * Verwendung:
 *   require_once __DIR__ . '/db.php';
 *   $zeilen = datenbankAbfrage("SELECT * FROM pages WHERE aktiv = 1");
 */

// Konfiguration laden (config.php muss vom Betreiber angelegt werden)
$konfigPfad = __DIR__ . '/config.php';
if (!file_exists($konfigPfad)) {
    // Fallback: Standardwerte, wenn config.php noch nicht existiert
    define('DB_PFAD', __DIR__ . '/../database/realteacher.sqlite');
} else {
    require_once $konfigPfad;
}

/**
 * Gibt eine PDO-Datenbankinstanz zurück (Singleton-Muster).
 *
 * @return PDO  Aktive PDO-Verbindung zur SQLite-Datenbank
 * @throws RuntimeException  Falls die Verbindung nicht aufgebaut werden kann
 */
function datenbankVerbindung(): PDO
{
    static $verbindung = null;

    if ($verbindung === null) {
        try {
            $verbindung = new PDO('sqlite:' . DB_PFAD);
            // Fehler als Ausnahmen werfen
            $verbindung->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Ergebnisse als assoziative Arrays zurückgeben
            $verbindung->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            // Fremdschlüssel aktivieren (SQLite: standardmäßig deaktiviert)
            $verbindung->exec('PRAGMA foreign_keys = ON;');
        } catch (PDOException $fehler) {
            throw new RuntimeException(
                'Datenbankverbindung fehlgeschlagen: ' . $fehler->getMessage()
            );
        }
    }

    return $verbindung;
}

/**
 * Führt eine SELECT-Abfrage aus und gibt alle Zeilen zurück.
 *
 * @param string $sql        SQL-Abfrage mit Platzhaltern (?)
 * @param array  $parameter  Werte für die Platzhalter
 * @return array             Array mit den Ergebnis-Zeilen
 */
function datenbankAbfrage(string $sql, array $parameter = []): array
{
    $anweisung = datenbankVerbindung()->prepare($sql);
    $anweisung->execute($parameter);
    return $anweisung->fetchAll();
}

/**
 * Führt eine INSERT/UPDATE/DELETE-Anweisung aus.
 *
 * @param string $sql        SQL-Anweisung mit Platzhaltern (?)
 * @param array  $parameter  Werte für die Platzhalter
 * @return int               Anzahl der betroffenen Zeilen
 */
function datenbankAusfuehren(string $sql, array $parameter = []): int
{
    $anweisung = datenbankVerbindung()->prepare($sql);
    $anweisung->execute($parameter);
    return $anweisung->rowCount();
}

/**
 * Gibt die ID des zuletzt eingefügten Datensatzes zurück.
 *
 * @return string  Letzte Insert-ID als String
 */
function letzteEinfuegeId(): string
{
    return datenbankVerbindung()->lastInsertId();
}
