# trtRealteacher.de_Start

Realteacher.de auf Kur: Altes Lehrer-HTML kommt ins Refactoring-Fitnessstudio.  
Sauberes Git, saubere Struktur – kein „Hab ich irgendwo auf dem Stick" mehr.  
PHP + SQLite + Unterricht = ❤️

---

## Website spiegeln (einmaliger Download)

Das Skript `mirror.sh` lädt **alle Inhalte** von realteacher.de lokal herunter –
HTML-Seiten, CSS, JavaScript, Bilder, Schriften und sonstige Assets – und
schreibt die Links so um, dass die Seite anschließend **offline im Browser**
geöffnet werden kann.

### Voraussetzungen

```bash
# Debian / Ubuntu
sudo apt install wget

# macOS (Homebrew)
brew install wget
```

### Ausführen

```bash
chmod +x mirror.sh
./mirror.sh
```

Die gespiegelten Dateien landen in:

```
mirror/
└── realteacher.de/
    ├── index.html
    ├── css/
    ├── js/
    ├── images/
    └── …
```

Einstiegspunkt für den lokalen Browser:

```
mirror/realteacher.de/index.html
```

> **Hinweis:** Das Verzeichnis `mirror/` ist in `.gitignore` eingetragen und
> wird **nicht** ins Repository committet – es dient nur als lokale
> Arbeitskopie für das Refactoring.
