<?php
require '_header.php';
if(isset($_GET['id'])){
    $item = $DB->query('SELECT id FROM items WHERE id=:id' , array('id'=> $_GET['id']));
    if(empty($item)){
        die("Ce produit n'existe pas");
    }
    $panier->add($item[0]->id);
    die('<p class="text-center">Le produit à bien été ajouté à votre panier <a href="javascript:history.back()">retourner sur le catalogue</a></p>');
}else{
    die("Vous n'avez pas sélectionné de produit à ajouter au panier");
}
?>