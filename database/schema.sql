-- schema.sql – SQLite-Datenbankschema für realteacher.de
-- Tabellen: pages (Seiten), modules (Module/Bereiche)
--
-- Anwendung:
--   sqlite3 database/realteacher.sqlite < database/schema.sql

PRAGMA foreign_keys = ON;
PRAGMA encoding = 'UTF-8';

-- ============================================================
-- Tabelle: pages
-- Speichert statische und dynamische Seiteninhalte
-- ============================================================
CREATE TABLE IF NOT EXISTS pages (
    id          INTEGER PRIMARY KEY AUTOINCREMENT,
    slug        TEXT    NOT NULL UNIQUE,          -- URL-Bezeichner, z. B. 'startseite'
    titel       TEXT    NOT NULL,                 -- Seitentitel (HTML-Title)
    inhalt      TEXT    DEFAULT '',               -- Hauptinhalt (HTML oder Markdown)
    aktiv       INTEGER NOT NULL DEFAULT 1,       -- 1 = sichtbar, 0 = versteckt
    erstellt_am TEXT    NOT NULL DEFAULT (datetime('now')),
    geaendert_am TEXT   NOT NULL DEFAULT (datetime('now'))
);

-- Startseite als erster Datensatz
INSERT OR IGNORE INTO pages (slug, titel, inhalt, aktiv)
VALUES (
    'startseite',
    'Startseite – realteacher.de',
    '<p>Willkommen auf realteacher.de!</p>',
    1
);

-- ============================================================
-- Tabelle: modules
-- Verwaltet die Hauptbereiche der Website (Technik, WBS/BO, …)
-- ============================================================
CREATE TABLE IF NOT EXISTS modules (
    id           INTEGER PRIMARY KEY AUTOINCREMENT,
    bezeichnung  TEXT    NOT NULL UNIQUE,         -- Interner Name, z. B. 'technik'
    titel        TEXT    NOT NULL,                -- Anzeigename, z. B. 'Technik-Projekte'
    beschreibung TEXT    DEFAULT '',              -- Kurzbeschreibung des Moduls
    url_pfad     TEXT    NOT NULL,                -- Dateipfad relativ zu /src/modules/
    sortierung   INTEGER NOT NULL DEFAULT 0,      -- Reihenfolge in der Navigation
    aktiv        INTEGER NOT NULL DEFAULT 1,      -- 1 = aktiv, 0 = deaktiviert
    erstellt_am  TEXT    NOT NULL DEFAULT (datetime('now'))
);

-- Standardmodule einfügen
INSERT OR IGNORE INTO modules (bezeichnung, titel, beschreibung, url_pfad, sortierung)
VALUES
    ('technik', 'Technik-Projekte',
     'Unterrichtsprojekte und Materialien für das Fach Technik.',
     'technik.php', 1),

    ('wbs', 'WBS / BO',
     'Materialien für Wirtschaft, Berufs- und Studienorientierung.',
     'wbs.php', 2),

    ('sport', 'Sport',
     'Stundenentwürfe und Materialien für das Fach Sport.',
     'sport.php', 3),

    ('tools', 'Digitale Tools',
     'Hilfreiche digitale Werkzeuge für den Unterrichtsalltag.',
     'tools.php', 4);
