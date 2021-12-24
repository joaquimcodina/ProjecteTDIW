<section class="novetats">
    <h2>NOVETATS</h2>
    <div class="container">
        <?php foreach($albumsHome1 as $album){ ?>
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
                    <a class="btn" onclick="detallProductesHome1(<?php echo htmlentities($album['id_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>)">Detalls</a>
                    <?php if($_SESSION['correu']){ ?>
                        <a class="btn" onclick="producteCabas(<?php echo htmlentities($album['id_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>)" data-name='<?php echo htmlentities($album['nom_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-price='<?php echo htmlentities($album['preu'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-img='<?php echo htmlentities($album['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-quantity='<?php echo htmlentities(1, ENT_QUOTES | ENT_HTML5, 'UTF-8')?>'>Afegir al cistell</a>
                    <?php } ?>
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
                    <a class="btn" onclick="detallProductesHome2(<?php echo htmlentities($album['id_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>)">Detalls</a>
                    <?php if($_SESSION['correu']){ ?>
                        <a class="btn" onclick="producteCabas(<?php echo htmlentities($album['id_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>)" data-name='<?php echo htmlentities($album['nom_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-price='<?php echo htmlentities($album['preu'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-img='<?php echo htmlentities($album['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-quantity='<?php echo htmlentities(1, ENT_QUOTES | ENT_HTML5, 'UTF-8')?>'>Afegir al cistell</a>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>