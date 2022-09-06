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
<?php foreach($appleArr as $product) :?>
<h1><?= $product['title'] ?></h1>
<?php endforeach;?>

</body>
</html>
