<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Serie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'original_name',
        'release',
        'country',
        'plot',
        'duration',
        'box_office',
        'budget',
        'genre_id',
        'mpaa_id',
        'status_id',
        'platform_id',
    ];
    
    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }
}
