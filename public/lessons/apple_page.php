<?php
require 'lesson8shplet.php';
if (!isset($appleArr))
    $appleArr = [];

//print_rr($appleArr);
?>
<html>
<head>
    <title>Продукция</title>
</head>
<body>
<?php foreach ($appleArr as $product) : ?>
    <h1><?= $product['title'] ?></h1>
    <div><?php echo $product['description'] ?> </div>
    <div>$<?php echo $product['price'] ?> </div>
    <?php foreach ($product['images'] as $image) : ?>
        <img width="150px" src="<?= $image?>">
    <?php endforeach; ?>
<?php endforeach; ?>

</body>
</html>
