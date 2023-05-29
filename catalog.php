<?php
require_once 'header.php';

require_once 'nav.php';

require_once 'catalogdata.php';
?>

    <main class="main">
        <?php if (empty($_GET['pid'])): ?>
        <h1>Catalog</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque deserunt eius expedita fuga fugiat officia
            perferendis placeat suscipit velit vero.</p>
        <div class="product_list"></div>
        <?php

        if(!empty($catalogData)):
            foreach ($catalogData as $id => $product): ?>
        <div class="product">
            <h3><a href="/catalog.php?pid=<?php echo $id;?>"><?php echo $product ['name'];?></a></h3>
            <div class="image"><img src="<?php echo $product ['image'];?>" alt=""></div>
            <div class="price"><?php echo $product ['price'];?></div>
        </div>

        <?php endforeach; endif; ?>
        <?php else: require_once './product.php'; endif; ?>
    </main>

<?php
require_once 'footer.php';






