<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    /** @use HasFactory<\Database\Factories\ProfileFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'bio',
        'date_of_birth',
        'phone',
        'user_id',
    ];

    /**
     * Establishes a relationship between the Profile and User models.
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
