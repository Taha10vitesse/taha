<?php require 'views/common/header.php' ?>

<div class="fond">
<form method="post" action="panier.php">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total %TVA</th>
                <th>Action</th>
            </tr>
        </thead>


        <?php 
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $items = array();
        }else{
            $items = $DB->query('SELECT * FROM items WHERE id IN ('.implode(',',$ids).')');
        }
        foreach($items as $item): 
        ?>
        
        
        <tbody>

            <tr>
                
                <td>
                    <a href="#" class="img"><img src="public/Assets/images/<?= $item->id +1 ?>.jpg" height="60"></a>
                </td>
                <td class="name"><?= $item->name ?></td>
                <td class="price"><?= number_format($item->price,2,',',' '); ?></td>
                <td class="quantity"><?= $_SESSION['panier'][$item->id];?></td>
                <td class="subtotal"><span><?= number_format($item->price * 1.196,2,',',' '); ?></span></td>
                <td class="action">
                    <a href="panier.php?delPanier=<?= $item->id; ?>" class="del"><img src="public/Assets/images/trash.png"></a>
                </td>
                
            </tr>
            
        </tbody>

        <?php endforeach ; ?>
        <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Article : <span><?= $panier->count(); ?></span></td>
                <td>TOTAL : <span><?= number_format($panier->total()*1.196,2,',',' ') ?> €</span></td>
            </tr>
        </tfoot>
    </table>
<a style="left: 1000px; margin-bottom: 100px;" class="btn btn-primary btn-lg" href="card.php" role="button">Suivant</a>
</form>
</div>


<?php require 'views/common/footer.php' ?>