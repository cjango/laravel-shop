<?php

namespace cjango\Shop\Models;

class Goods extends Model
{
    public function user()
    {
        return $this->belongsTo(config('cshop.providers.user'));
    }
}
