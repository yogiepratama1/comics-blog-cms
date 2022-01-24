<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'universe_id',
        'name',
        'body',
        'image'
    ];


    public function universe()
    {
        return $this->belongsTo(Universe::class, 'universe_id');
    }

    public function characters()
    {
        return $this->belongsToMany(Character::class, 'character_team');
    }
}
