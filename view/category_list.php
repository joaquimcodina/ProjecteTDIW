<div class="container">
    <?php foreach($categories as $category){ ?>
        <div class="card">
            <img src="<?php echo $category['foto']?>" alt="<?php echo $category['nom_categoria']?>">
            <h4><?php echo $category['nom_categoria']?></h4>
            <div class="actions">
                <a class="btn" onclick="productesCategoria(<?php echo $category['id_categoria']?>)"><i class="fa fa-info-circle"></i></a>
            </div>
        </div>
    <?php } ?>
</div>