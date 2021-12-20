<div class="container">
    <?php foreach($productesArtista as $producteArtista){ ?>
        <div class="card">
            <img src="<?php echo htmlentities($producteArtista['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" alt="<?php echo htmlentities($producteArtista['nom_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>">
            <h4><?php echo htmlentities($producteArtista['nom_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></h4>
            <p><?php foreach($artistes as $artist){
                    if($artist['id_artista'] === $producteArtista['id_artista']){
                        echo htmlentities($artist['nom_artista'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
                    }
                }?>
            </p>
            <p><?php echo htmlentities($producteArtista['preu'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>€</p>
            <div class="actions">
                <a class="btn" onclick="detallProductes(<?php echo htmlentities($producteArtista['id_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>)">Detalls</a>
                <a href="" class="btn">Afegir al cistell</a>
            </div>
        </div>
    <?php } ?>
</div>