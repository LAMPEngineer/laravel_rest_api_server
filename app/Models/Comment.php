<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    
    /**
     * Get the model's attribute casting.
     * 
     * @return array<json, json>
     */
    protected function casts(): array
    {
        return [
            'body' => 'array',
        ];
    }

    /**
     * Establishes a relationship between the Comment and Post models.
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
     * Establishes a relationship between Comment and User models.
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
