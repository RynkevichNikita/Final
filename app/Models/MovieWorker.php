<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class MovieWorker extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        'worker_id',
    ];
}
