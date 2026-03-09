# Roadmap – realteacher.de

Geplante Funktionen und offene TODOs für das Projekt **trtRealteacher.de_Start**.

---

## Phase 1 – Grundstruktur ✅

- [x] Projektstruktur aufsetzen (public, src, backend, database, docs)
- [x] Landingpage mit Hero-Bereich und Inhalts-Boxen
- [x] Responsives CSS-Layout (CSS-Variablen, Grid, mobile Navigation)
- [x] Basis-JavaScript (Hamburger-Menü, aktive Navigation)
- [x] Wiederverwendbare Templates (header.php, footer.php)
- [x] Platzhalterseiten für alle vier Bereiche (Technik, WBS/BO, Sport, Tools)
- [x] SQLite-Datenbankconnector (PDO, Prepared Statements)
- [x] Datenbankschema (Tabellen: pages, modules)
- [x] Konfigurationsvorlage (config.example.php)
- [x] .gitignore für PHP/Web-Projekt

---

## Phase 2 – Inhalte & Navigation

- [ ] Echte Inhalte für Technik-Bereich einfügen
- [ ] Echte Inhalte für WBS/BO-Bereich einfügen
- [ ] Echte Inhalte für Sport-Bereich einfügen
- [ ] Digitale Tools kuratieren und verlinken
- [ ] Breadcrumb-Navigation für Module
- [ ] Sitemap erstellen

---

## Phase 3 – Datenbankintegration

- [ ] Seiteninhalte aus Datenbank laden (statt statisch)
- [ ] Einfaches Admin-Backend zum Bearbeiten von Inhalten
- [ ] Benutzerauthentifizierung (Session-basiert, kein Framework)
- [ ] CRUD-Funktionen für `pages`-Tabelle

---

## Phase 4 – Erweiterungen

- [ ] Suchfunktion (SQLite Full-Text-Search)
- [ ] Kontaktformular mit Anti-Spam
- [ ] RSS-Feed für neue Materialien
- [ ] Druckfreundliches CSS für Arbeitsblätter
- [ ] Dark-Mode-Unterstützung (CSS `prefers-color-scheme`)

---

## Phase 5 – Deployment & Betrieb

- [ ] Server-Konfiguration (Apache .htaccess / Nginx)
- [ ] HTTPS erzwingen
- [ ] Automatisches Backup der SQLite-Datenbank
- [ ] Performance-Optimierung (Caching, minifiziertes CSS/JS)
- [ ] Barrierefreiheit prüfen (WCAG 2.1 AA)

---

## Bekannte Probleme / Bugs

_Noch keine bekannt._

---

## Ideen & Notizen

- Moodle-Integration für Kurslinks prüfen
- QR-Codes für Materialien generieren
- Möglichkeit für Schülerinnen und Schüler, eigene Projekte einzureichen
