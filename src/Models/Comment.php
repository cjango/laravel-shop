<?php

namespace cjango\Shop\Models;

use Ramsey\Uuid\Uuid;

class Comment extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($comment) {
            $comment->{$comment->getKeyName()} = Uuid::uuid4()->toString();
        });
    }

    public function user()
    {
        return $this->belongsTo(config('cshop.providers.user'));
    }

    public function commentable()
    {
        return $this->morphTo();
    }
}
