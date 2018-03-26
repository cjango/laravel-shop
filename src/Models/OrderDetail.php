<?php

namespace cjango\Shop\Models;

class OrderDetail extends Model
{

    public function goods()
    {
        return $this->belongsTo(config('cshop.providers.goods'));
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getSubtotalAttribute()
    {
        return $this->price * $this->quantity;
    }
}
