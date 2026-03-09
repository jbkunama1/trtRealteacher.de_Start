# Architektur – realteacher.de

## Übersicht

**realteacher.de** ist ein schulbezogenes Webportal für gemischte Unterrichtsprojekte
(Technik, WBS/BO, Sport) in Baden-Württemberg.

**Tech-Stack:** PHP Backend · HTML/CSS/JS Frontend · SQLite Datenbank

---

## Ordnerstruktur

```
trtRealteacher.de_Start/
│
├── public/                    # Öffentlich erreichbarer Webroot (Document Root)
│   ├── index.php              # Einstiegspunkt / Landingpage
│   └── assets/
│       ├── css/
│       │   └── main.css       # Zentrales Stylesheet (CSS-Variablen, responsiv)
│       └── js/
│           └── main.js        # Basis-JavaScript (mobile Navigation, UI-Helfer)
│
├── src/                       # Nicht öffentlich zugängliche PHP-Quelldateien
│   ├── templates/             # Wiederverwendbare HTML-Bausteine
│   │   ├── header.php         # HTML-Head, Navigation (in alle Seiten eingebunden)
│   │   └── footer.php         # Footer mit Copyright, schließt <body> und <html>
│   └── modules/               # Einzelne Inhaltsbereiche der Website
│       ├── technik.php        # Bereich Technik-Projekte
│       ├── wbs.php            # Bereich Wirtschaft / Berufs- und Studienorientierung
│       ├── sport.php          # Bereich Sport
│       └── tools.php          # Bereich Digitale Tools
│
├── backend/                   # Backend-Logik (Datenbank, Konfiguration)
│   ├── db.php                 # SQLite-Connector (PDO, Hilfsfunktionen)
│   └── config.example.php     # Konfigurationsvorlage (→ kopieren als config.php)
│
├── database/                  # Datenbankdateien und Schema
│   └── schema.sql             # SQLite-Schema (Tabellen: pages, modules)
│
├── docs/                      # Projektdokumentation
│   ├── architektur.md         # Diese Datei – Strukturbeschreibung
│   └── roadmap.md             # Geplante Funktionen und TODOs
│
├── .gitignore                 # Ignoriert DB-Dateien, Logs, IDE-Ordner usw.
└── README.md                  # Kurzbeschreibung des Projekts
```

---

## Schichtenmodell

```
Browser
  │
  ▼
public/index.php  ←─── öffentlicher Einstiegspunkt
  │
  ├── require_once src/templates/header.php   (Navigation, CSS-Einbindung)
  ├── [Seiteninhalt / Modul]
  └── require_once src/templates/footer.php   (Copyright, JS-Einbindung)
          │
          └── (optional) backend/db.php       (Datenbankzugriff via PDO)
                  │
                  └── database/realteacher.sqlite
```

---

## Designprinzipien

| Prinzip | Umsetzung |
|---|---|
| **Trennung von Layout und Logik** | Templates in `/src/templates/`, Logik in `/backend/` und `/src/modules/` |
| **DRY (Don't Repeat Yourself)** | Header und Footer werden per `require_once` eingebunden |
| **Sicherheit** | PDO mit Prepared Statements, `config.php` in `.gitignore` |
| **Erweiterbarkeit** | Neues Modul = neue Datei in `/src/modules/` + Eintrag in DB |
| **Responsivität** | CSS-Grid, CSS-Variablen, Breakpoints in `main.css` |

---

## Neues Modul hinzufügen

1. Neue Datei anlegen: `src/modules/mein-modul.php`
2. Seitenvariablen setzen und Header/Footer einbinden (wie bestehende Module)
3. Navigationslink in `src/templates/header.php` ergänzen
4. Datenbankeinträge in `database/schema.sql` hinzufügen
5. Box auf der Landingpage `public/index.php` ergänzen

---

## Konventionen

- **Sprache:** Alle Kommentare, Variablennamen und Texte auf **Deutsch**
- **PHP-Funktionsnamen:** camelCase auf Deutsch, z. B. `datenbankVerbindung()`
- **CSS-Klassen:** Kleinbuchstaben mit Bindestrichen (BEM-ähnlich)
- **Zeichensatz:** UTF-8 durchgängig
- **PHP-Version:** Mindestens PHP 8.0 (wegen `match`, `named arguments`, `??=`)
