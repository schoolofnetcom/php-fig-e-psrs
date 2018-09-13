<?php

require __DIR__ . '/vendor/autoload.php';

$product = new SON\Store\Computers\Product;
echo $product->getTitle();

echo PHP_EOL;

$product = new SON\Store\Music\Instruments\Product;
echo $product->getTitle();

echo PHP_EOL;

$product = new SON\Store\Music\Audio\Product;
echo $product->getTitle();

echo PHP_EOL;

$product = new SON\Store\ListProduct;
echo $product->getAll();


// $closureWithArgs = function ($arg1, $arg2 = null) {
//     // body
// };
