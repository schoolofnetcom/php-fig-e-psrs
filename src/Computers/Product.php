<?php

namespace SON\Store\Computers;

use SON\Store\Product as Type;

class Product implements Type
{
    public function getTitle()
    {
        return 'Notebook';
    }
}
