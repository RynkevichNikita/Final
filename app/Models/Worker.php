<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'profession_id'
    ];
    
    public function profession(): BelongsTo
    {
        return $this->belongsTo(Profession::class);
    }
    
    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class)->using(RoleUser::class);
    }
}
