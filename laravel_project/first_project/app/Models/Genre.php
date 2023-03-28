<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 
        'description',
    ];

    public function movies():BelongsToMany{
        return $this->belongsToMany(Movie::class);
    }
}