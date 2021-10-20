<h1>Llistat Productes</h1>
<div class="row">
    <ul>
        <?php foreach ($products as $product): ?>
            <li class="col">
                <a href ="nav.php?action=productes&category_id = <?php echo $product[id]?>">
                    <?php echo $product['name']?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>