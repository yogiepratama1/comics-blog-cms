<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Universe extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function timelines()
    {
        return $this->hasMany(Timeline::class);
    }

    public function comics()
    {
        return $this->hasManyThrough(Comic::class, Timeline::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function characters()
    {
        return $this->hasManyThrough(Character::class, Team::class);
    }
}
