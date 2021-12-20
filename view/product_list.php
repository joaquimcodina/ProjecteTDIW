<div class="container">
    <?php foreach($albums as $album){ ?>
        <div class="card">
            <img src="<?php echo htmlentities($album['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" alt="<?php echo htmlentities($album['nom_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>">
            <h4><?php echo htmlentities($album['nom_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></h4>
            <p><?php foreach($artistes as $artist){
                   if($artist['id_artista'] === $album['id_artista']){
                       echo htmlentities($artist['nom_artista'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
                    }
                }?>
            </p>
            <p><?php echo htmlentities($album['preu'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>€</p>
            <div class="actions">
                <a class="btn" onclick="detallProductes(<?php echo htmlentities($album['id_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>)">Detalls</a>
                <a href="" class="btn">Afegir al cistell</a>
            </div>
        </div>
    <?php } ?>
</div>