<?php

namespace SON\Store;

use SON\Store\Computers\Product;

class ListProduct
{
    const PRODUCTS_TYPE = 0;
    public $name = 'eu sou uma propriedade';

    // public, protected, private
    // abstract public static function getAll()
    // final public static function getAll()

    public function getAll()
    {
        $name_of_product = 'eu sou uma propriedade';

        $product_title = (new Product)->getTitle();

        return 'lista';
    }
}
