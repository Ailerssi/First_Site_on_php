<?php if (!empty($catalogData) && (!empty($_GET['pid']))):
    $product = $catalogData[$_GET['pid']];
    ?>


    <h1><?php echo $product['name']?></h1>
    <div class="image"><img src="<?php echo $product ['image'];?>" alt=""></div>
    <div class="price"><?php echo $product ['price'];?></div>
    <div class="content"><?php echo $product ['content'];?></div>


<?php endif; ?>
