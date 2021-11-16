<section class="novetats">
    <h2>NOVETATS</h2>
    <div class="container">
        <?php foreach($albumsHome1 as $album){ ?>
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
                    <a class="btn" onclick="detallProductesHome1(<?php echo $album['id_album']?>)">Detalls</a>
                    <a href="" class="btn">Afegir al cistell</a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<br/>
<section class="mesVenuts">
    <h2>ELS + VENUTS</h2>
    <div class="container">
        <?php foreach($albumsHome2 as $album){ ?>
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
                    <a class="btn" onclick="detallProductesHome2(<?php echo $album['id_album']?>)">Detalls</a>
                    <a href="" class="btn">Afegir al cistell</a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>