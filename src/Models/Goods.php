<?php

namespace cjango\Shop\Models;

use cjango\Shop\Contracts\Buyable;
use cjango\Shop\Traits\Cartable;

class Goods extends Model implements Buyable
{
    use Cartable;

    public function getStock()
    {
        return $this->stock;
    }

    public function pictures()
    {
        return $this->hasMany(GoodsPicture::class);
    }
}
