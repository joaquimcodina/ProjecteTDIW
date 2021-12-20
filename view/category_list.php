<div class="container">
    <?php foreach($categories as $category){ ?>
        <div class="card">
            <img src="<?php echo htmlentities($category['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" alt="<?php echo htmlentities($category['nom_categoria'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>">
            <h4><?php echo htmlentities($category['nom_categoria'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></h4>
            <div class="actions">
                <a class="btn" onclick="productesCategoria(<?php echo htmlentities($category['id_categoria'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>)">Més</a>
            </div>
        </div>
    <?php } ?>
</div>