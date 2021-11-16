<div class="container">
    <?php foreach($artistes as $artist){ ?>
        <div class="card">
            <img src="<?php echo $artist['foto']?>" alt="<?php echo $artist['nom_artista']?>">
            <h4><?php echo $artist['nom_artista']?></h4>
            <div class="actions">
                <a class="btn" onclick="productesArtista(<?php echo $artist['id_artista']?>)">Més</a>
            </div>
        </div>
    <?php } ?>
</div>