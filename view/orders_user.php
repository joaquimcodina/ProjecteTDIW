<div class="container">
    <table>
        <?php foreach ($comandes as $comanda) { ?>
            <?php $newDate = date("d-m-Y", strtotime($comanda['data'])); ?>
            <tr>
                <th>Comanda realitzada el: <?php echo htmlentities($newDate, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></th>
            </tr>
            <?php foreach ($liniaComandes as $liniaComanda) { ?>
                <?php foreach($productes as $producte){
                    if($producte['id_album'] === $liniaComanda['id_album'] && $comanda['id_comanda'] === $liniaComanda['id_comanda']){ ?>
                        <?php $preuTotalComanda += $liniaComanda['preu_total_linia']; ?>
                        <tr>
                            <td><img src="<?php echo htmlentities($producte['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" width="330px" height="220px" alt="Producte Cabàs"></td>
                            <td><?php echo htmlentities($producte['nom_album'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                            <td><?php echo htmlentities($liniaComanda['unitats'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?> Unitat(s)</td>
                            <td><?php echo htmlentities($producte['preu'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?> €</td>
                            <td><?php echo htmlentities($liniaComanda['preu_total_linia'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?> €</td>
                        </tr>
                    <?php }?>
                <?php } ?>
            <?php } ?>
            <td>Preu total Comanda: <?php echo htmlentities($preuTotalComanda, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?> €</td>
            <?php $preuTotalComanda=0 ?>
        <?php } ?>
    </table>
    <?php if(count($comandes) === 0){ ?>
        <h2>No hi han comandes.</h2>
    <?php } ?>
</div>