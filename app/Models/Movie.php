<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
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
    
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }
    
    public function mpaa(): BelongsTo
    {
        return $this->belongsTo(Mpaa::class);
    }
    
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
    
    public function platform(): BelongsTo
    {
        return $this->belongsTo(Platform::class);
    }
    
    public function rates(): HasMany
    {
        return $this->hasMany(Rate::class);
    }
    
    public function marks(): HasMany
    {
        return $this->hasMany(Mark::class);
    }
    
    public function stores(): HasMany
    {
        return $this->hasMany(Store::class);
    }
    
    public function serie(): HasOne
    {
        return $this->hasOne(Serie::class);
    }
    
    public function workers(): BelongsToMany
    {
        return $this->belongsToMany(Worker::class)->using(RoleUser::class);
    }
}
