<?php

namespace cjango\Shop\Repositories;

use cjango\Shop\Models\Order;

class OrderRepository
{

    public function info($id)
    {
        return Order::find($id);
    }
}
