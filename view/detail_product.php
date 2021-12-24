<div class="small-container single-product">
    <?php foreach($detailProduct as $product){ ?>
        <div class="row">
            <div class="col-2">
                <img src="<?php echo htmlentities($product['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" width="100%" alt="<?php echo htmlentities($product['nom_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" id="ProductImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="<?php echo htmlentities($product['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" width="100%" class="small-img" onmouseover="canviarImatgeDetail(0);" alt="Imatge1">
                    </div>
                    <div class="small-img-col">
                        <img src="<?php echo htmlentities($product['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" width="100%" class="small-img" onmouseover="canviarImatgeDetail(1);" alt="Imatge2">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>
                    <?php foreach($categories as $categoria){
                        if($categoria['id_categoria'] === $product['id_categoria']){
                            echo htmlentities( "Categoria: ".$categoria['nom_categoria'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
                        }
                    }?>
                </p>
                <div id="availability" class="a-section a-spacing-base">
                    <span class="a-size-medium a-color-success">
                        En stock.
                    </span>
                </div>
                <h1><?php echo $product['nom_album']?></h1>
                <h3><?php foreach($artistes as $artist){
                        if($artist['id_artista'] === $product['id_artista'])
                            echo htmlentities($artist['nom_artista'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
                    }?>
                </h3>
                <h4><?php echo htmlentities("Preu: ".$product['preu'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>€</h4>
                <div class="actions">
                    <?php if($_SESSION['correu']){ ?>
                        <label for="units"></label>
                        <select name="units" id="units">
                            <?php for ($i = 1; $i <= $product['unitats']; $i++){ ?>
                                <option value="<?php echo htmlentities($i, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>"><?php echo htmlentities($i, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></option>
                            <?php }?>
                        </select>
                            <a class="btn" onclick="producteCabas(<?php echo htmlentities($product['id_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>)" data-name='<?php echo htmlentities($product['nom_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-price='<?php echo htmlentities($product['preu'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-img='<?php echo htmlentities($product['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-quantity='<?php echo htmlentities($i, ENT_QUOTES | ENT_HTML5, 'UTF-8')?>'>Afegir al cistell</a>
                    <?php } ?>
                </div>
                <h3 class="desc">Descripció del producte:</h3>
                <p class="desc"><?php echo htmlentities($product['descripcio'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></p>
                <iframe src="<?php echo htmlentities($product['playlist'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" width="100%" height="380" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>
    <?php }?>
</div>