<div class="container">
    <?php foreach($albums as $album){ ?>
        <div class="card">
            <img src="<?php echo $album['foto']?>" alt="<?php echo $album['nom_album']?>">
            <h4><?php echo $album['nom_album']?></h4>
            <p><?php foreach($artistes as $artist){
                   if($artist['id_artista'] === $album['id_artista']){
                       echo $artist['nom_artista'];
                    }
                }?>
            </p>
            <p><?php echo $album['preu']?>€</p>
            <div class="actions">
                <a class="btn" onclick="detallProductes(<?php echo $album['id_album']?>)">Detalls</a>
                <a href="" class="btn">Afegir al cistell</a>
            </div>
        </div>
    <?php } ?>
</div>