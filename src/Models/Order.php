<?php

namespace cjango\Shop\Models;

class Order extends Model
{

    public function user()
    {
        return $this->belongsTo(config('cshop.providers.user'));
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->orderBy('created_at', 'desc');
    }

    public function details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function logs()
    {
        return $this->hasMany(OrderLog::class);
    }

    public function getTotalAttribute()
    {
        return $this->details()->sum('subtotal');
    }
}
