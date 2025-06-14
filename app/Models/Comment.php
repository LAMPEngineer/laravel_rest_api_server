<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    protected $casts = [
        'body' => 'array',
    ];

    /**
     * Stablishes a relationship between the Comment and Post models.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */    
    public function post(): BelongsTo
    {
        return $this->belongsTo(
            related: Post::class
        );
    }
    
    /**
     * Stablishes a relationship between Comment and User models.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class
        );
    }
}
