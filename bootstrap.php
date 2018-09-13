<?php

require __DIR__ . '/vendor/autoload.php';

use SON\Store\Computers\Product as Notebook;
use SON\Store\Music\Instruments\Product as Piano;
use SON\Store\Music\Audio\Product as InterfaceDeAudio;
use SON\Store\ListProduct;

$products = new ListProduct;

$products->addProduct(new Notebook);
$products->addProduct(new Piano);
$products->addProduct(new InterfaceDeAudio);

var_dump($products->getAll());

$logger = new SON\Store\Logger\Logger(__DIR__ . '/logs');
$logger->log('info', 'O user {name} acabou de acessar a aplicação', ['name' => 'Erik']);
$logger->log(\Psr\Log\LogLevel::ALERT, 'O site caiu');
