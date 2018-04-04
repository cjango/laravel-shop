<?php

namespace cjango\Shop\Models;

class GoodsPicture extends Model
{
    public function goods()
    {
        return $this->belongsTo(Goods::class);
    }
}
