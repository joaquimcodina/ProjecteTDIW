<div class="small-container single-product">
    <?php foreach($detailProduct as $product){ ?>
        <div class="row">
            <div class="col-2">
                <img src="<?php echo $product['foto']?>" width="100%" alt="<?php echo $product['nom_album']?>" id="ProductImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="<?php echo $product['foto']?>" width="100%" class="small-img" onmouseover="canviarImatgeDetail(0);" alt="Imatge1">
                    </div>
                    <div class="small-img-col">
                        <img src="<?php echo $product['foto']?>" width="100%" class="small-img" onmouseover="canviarImatgeDetail(1);" alt="Imatge2">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>
                    <?php foreach($categories as $categoria){
                        if($categoria['id_categoria'] === $product['id_categoria']){
                            echo "Categoria: ".$categoria['nom_categoria'];
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
                            echo $artist['nom_artista'];
                    }?>
                </h3>
                <h4><?php echo "Preu: ".$product['preu']?>€</h4>
                <label><input type="number" value="1" min="1" max="10"></label>
                <a href="" class="btn">Afegir al cistell</a>
                <h3 class="desc">Descripció del producte:</h3>
                <p class="desc"><?php echo $product['descripcio'] ?></p>
                <iframe src="<?php echo $product['playlist']?>" width="100%" height="380" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>
    <?php }?>
</div>