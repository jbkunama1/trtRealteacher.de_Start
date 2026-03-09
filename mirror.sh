#!/usr/bin/env bash
# ---------------------------------------------------------------------------
# mirror.sh – Vollständiger Website-Spiegel für realteacher.de
#
# Lädt alle HTML-Seiten, CSS, JavaScript, Bilder, Schriften und sonstige
# Assets von realteacher.de herunter und speichert sie im Verzeichnis
# „mirror/".  Die Links in den HTML-Dateien werden so umgeschrieben, dass
# die gespiegelte Seite lokal im Browser geöffnet werden kann.
#
# Voraussetzungen:
#   - wget  (apt install wget  /  brew install wget)
#
# Verwendung:
#   chmod +x mirror.sh
#   ./mirror.sh
#
# Das Ergebnis liegt anschließend in:  mirror/realteacher.de/
# ---------------------------------------------------------------------------

set -euo pipefail

TARGET_URL="https://realteacher.de/"
OUTPUT_DIR="mirror"

echo "======================================================"
echo "  Starte Website-Spiegel: ${TARGET_URL}"
echo "  Ausgabeverzeichnis:      ${OUTPUT_DIR}/"
echo "======================================================"

mkdir -p "${OUTPUT_DIR}"

wget \
  --mirror \
  --convert-links \
  --adjust-extension \
  --page-requisites \
  --no-parent \
  --span-hosts \
  --domains "realteacher.de,www.realteacher.de" \
  --directory-prefix="${OUTPUT_DIR}" \
  --tries=3 \
  --wait=1 \
  --random-wait \
  --timeout=30 \
  --user-agent="Mozilla/5.0 (compatible; wget-mirror/1.0)" \
  "${TARGET_URL}"

echo ""
echo "======================================================"
echo "  Fertig!  Gespeicherte Dateien:"
find "${OUTPUT_DIR}" -type f | wc -l
echo "  Gesamtgröße:"
du -sh "${OUTPUT_DIR}"
echo ""
echo "  Einstiegspunkt (lokal öffnen):"
echo "    ${OUTPUT_DIR}/realteacher.de/index.html"
echo "======================================================"
