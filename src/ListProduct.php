<?php

namespace SON\Store;

use SON\Store\Product;

class ListProduct
{
    private $list = [];

    public function addProduct(Product $product)
    {
        $this->list[] = $product->getTitle();
    }

    public function getAll()
    {
        return $this->list;
    }
}
