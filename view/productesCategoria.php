<div class="container">
    <?php foreach($productesCategories as $producteCategoria){ ?>
        <div class="card">
            <img src="<?php echo $producteCategoria['foto']?>" alt="<?php echo $producteCategoria['nom_album']?>">
            <h4><?php echo $producteCategoria['nom_album']?></h4>
            <p><?php foreach($artistes as $artist){
                    if($artist['id_artista'] === $producteCategoria['id_artista']){
                        echo $artist['nom_artista'];
                    }
                }?>
            </p>
            <p><?php echo $producteCategoria['preu']?>€</p>
            <div class="actions">
                <a class="btn" onclick="detallProductes(<?php echo $producteCategoria['id_album']?>)"><i class="fa fa-info-circle"></i></a>
                <a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
            </div>
        </div>
    <?php } ?>
</div>