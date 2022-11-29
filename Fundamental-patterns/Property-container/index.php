<?php

include_once('Controllers/ProductController.php');

$product = new ProductController(); 
$product = $product->show();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Title: <?= $product->getTitle(); ?></h1>
    <h2>Price: <?= $product->getPrice(); ?></h2>
    
    <!-- added property -->
    <h3>Size: <?= $product->getProperty('size'); ?></h3>

    <!-- setted property -->
    <h3>Color: <?= $product->getProperty('color'); ?></h3>

    <!-- deleted property -->
    <h3>Sex: <?= $product->getProperty('sex'); ?></h3>
</body>
</html>

 
