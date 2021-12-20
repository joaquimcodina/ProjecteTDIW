<div class="container">
    <?php foreach($artistes as $artist){ ?>
        <div class="card">
            <img src="<?php echo htmlentities($artist['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" alt="<?php echo htmlentities($artist['nom_artista'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>">
            <h4><?php echo htmlentities($artist['nom_artista'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></h4>
            <div class="actions">
                <a class="btn" onclick="productesArtista(<?php echo htmlentities($artist['id_artista'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>)">Més</a>
            </div>
        </div>
    <?php } ?>
</div>