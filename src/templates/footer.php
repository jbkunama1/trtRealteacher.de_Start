<?php
/**
 * footer.php – Gemeinsamer Footer-Bereich
 * Wird in alle Seiten per require_once eingebunden.
 * Schließt außerdem das <body>- und <html>-Tag.
 */
$aktuellesJahr = date('Y');
?>

<!-- ============ SITE FOOTER ============ -->
<footer class="site-footer">
    <div class="container">
        <p>
            &copy; <?= $aktuellesJahr ?> <a href="https://realteacher.de" target="_blank" rel="noopener">realteacher.de</a>
            – Digitale Bildung und Innovation in Baden-Württemberg.
        </p>
        <p style="margin-top: 0.4rem; font-size: 0.82rem; opacity: 0.7;">
            Unterrichtskontext: Technik, WBS/BO, Sport – Gemischte Schulprojekte BW
        </p>
    </div>
</footer>
<!-- ============ /SITE FOOTER ============ -->

<!-- Haupt-JavaScript -->
<script src="<?= $basisPfad ?>assets/js/main.js"></script>
</body>
</html>
