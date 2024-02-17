
<?php require 'views/common/header.php' ?>

<div class="interface">
<div class="shop-items">
  <div class="container-fluid">
    <div class="row">
      
        <?php $items = $DB->query('SELECT * FROM items WHERE category = 3'); ?>
        <?php foreach ($items as $item): ?>
        <!-- Restaurant Item -->
        <div class="item">
          <!-- Item's image -->
          <div class="imgPieces">
            <img src="public/Assets/images/<?= $item->image; ?>.jpg" alt="">
          </div>
          <!-- Item details -->
          <div class="item-dtls">
            <!-- product title -->
            <h4><?= $item->name ?></h4>
            <p><?= $item->description ?></p>
            <!-- price -->
            <span class="price lblue"> <?= number_format($item->price,2,',',' '); ?> €</span>
          </div>
          <!-- add to cart btn -->
          <div class="ecom bg-lblue">
            <a class="btn" href="addpanier.php?id=<?= $item->id; ?>">Ajouter au panier</a>
          </div>
        </div>
        <?php endforeach ?>
      
      
    </div>
</div>
</div>                
</div>

<?php require 'views/common/footer.php' ?>