<?php

namespace cjango\Shop\Contracts;

interface Buyable
{

    /**
     * 获取库存余量
     */
    public function getStock();

}
