<?php

declare(strict_types=1);

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Relations\BelongsTo;

class Comment extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'comments';

    protected $fillable = [
        'user_id',
        'content'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
