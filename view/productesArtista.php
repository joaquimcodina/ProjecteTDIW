<div class="container">
    <?php foreach($productesArtista as $producteArtista){ ?>
        <div class="card">
            <img src="<?php echo $producteArtista['foto']?>" alt="<?php echo $producteArtista['nom_album']?>">
            <h4><?php echo $producteArtista['nom_album']?></h4>
            <p><?php foreach($artistes as $artist){
                    if($artist['id_artista'] === $producteArtista['id_artista']){
                        echo $artist['nom_artista'];
                    }
                }?>
            </p>
            <p><?php echo $producteArtista['preu']?>€</p>
            <div class="actions">
                <a class="btn" onclick="detallProductes(<?php echo $producteArtista['id_album']?>)"><i class="fa fa-info-circle"></i></a>
                <a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
            </div>
        </div>
    <?php } ?>
</div>