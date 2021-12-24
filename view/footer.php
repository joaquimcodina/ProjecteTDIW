<footer>
    <div class="footer-content">
        <h3>Resum de la comanda</h3>
        <p>Número de productes: <?php echo htmlentities($_SESSION['totalUnits'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></p>
        <p>Import Total: <?php echo htmlentities($_SESSION['total'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?> €</p>
        <?php if (isset($_SESSION['ultimProd'])) { ?>
            <h4>Últim Producte del Cabàs: <img src="<?php echo htmlentities($_SESSION['ultimProd'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" width="55px" height="55px" alt="Últim Producte Cabàs"></h4>
        <?php } else { ?>
            <h4>Últim Producte del Cabàs</h4>
        <?php } ?>
    </div>
</footer>