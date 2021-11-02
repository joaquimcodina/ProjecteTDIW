<h1>Llistat Artistes</h1>
<div class="row">
    <ul>
        <?php foreach ($artists as $artist): ?>
            <li class="col">
                <a href ="nav.php?action=artistes">
                    <?php echo $artist['name']?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>