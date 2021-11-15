<div class="container">
    <?php foreach($artistes as $artist){ ?>
        <div class="card">
            <img src="<?php echo $artist['foto']?>" alt="<?php echo $artist['nom_artista']?>">
            <h4><?php echo $artist['nom_artista']?></h4>
            <div class="actions"> <!-- aqui hauriem de fer crides asincrones amb els productes de x categoria, sense carregar la pagina-->
                <a class="btn" onclick="productesArtista(<?php echo $artist['id_artista']?>)"><i class="fa fa-info-circle"></i></a>
            </div>
        </div>
    <?php } ?>
</div>