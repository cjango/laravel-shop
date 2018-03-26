<?php

namespace cjango\Shop\Models;

class Address extends Model
{
    public function user()
    {
        return $this->belongsTo(config('cshop.providers.user'));
    }
}
