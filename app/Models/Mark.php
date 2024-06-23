<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'movie_id',
        'favourites',
        'will_watch',
        'watched',
    ];
    
    public function movies(): BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }
    
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
