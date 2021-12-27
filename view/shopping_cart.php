<div id="container-cart">
    <table>
        <?php if(isset($_SESSION['cart'])){
            foreach ($_SESSION['cart'] as $i) { ?>
            <tr>
                <td><img src="<?php echo htmlentities($_SESSION['img'][$i], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" width="330px" height="220px" alt="Producte Cabàs"></td>
                <td><?php echo htmlentities($_SESSION['name'][$i], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                <td><?php echo htmlentities($_SESSION['price'][$i], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?> €</td>
                <td><?php echo htmlentities($_SESSION['quantity'][$i], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?> Unitat(s)</td>
                <td><?php echo htmlentities($_SESSION['amount'][$i], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?> €</td>
                <td><a href="" class="trash-icon"><img src="../img/trash.png" alt="Trash"></a></td>
            </tr>
        <?php }} ?>
    </table>
    <p>Import Total: <?php echo htmlentities($_SESSION['total'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?> €</p>
    <a class="btn" href="<?php echo "?action=".$action='tramitar-comanda'?>">Tramitar Comanda</a>
    <a href="<?php echo "?action=".$action=''?>" class="btn">Esborrar Cabàs</a>
</div>