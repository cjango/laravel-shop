<?php

namespace cjango\Shop\Traits;

use cjango\Shop\Exceptions\LackStockException;

trait Cartable
{

    /**
     * 加入购物车
     * @param  integer $quantity [description]
     * @return [type]            [description]
     */
    function toCart($quantity = 1)
    {
        if ($quantity > $this->getStock()) {
            throw new LackStockException("商品库存不足");
        }
    }
}
