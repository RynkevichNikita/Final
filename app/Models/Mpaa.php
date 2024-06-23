<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mpaa extends Model
{
    use HasFactory;

    protected $fillable = [
        'mpaa',
    ];
    
    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class);
    }
}
