<?php

namespace SON\Store\Music\Instruments;

use SON\Store\Product as Type;

class Product implements Type
{
    public function getTitle()
    {
        return 'Piano digital';
    }
}
