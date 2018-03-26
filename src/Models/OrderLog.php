<?php

namespace cjango\Shop\Models;

class OrderLog extends Model
{
    const UPDATED_AT = null;

    public function user()
    {
        return $this->belongsTo(config('cshop.providers.user'));
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
