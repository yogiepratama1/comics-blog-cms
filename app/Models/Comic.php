<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function universe()
    {
        return $this->belongsTo(Universe::class, 'universe_id');
    }

    public function timeline()
    {
        return $this->belongsTo(Timeline::class, 'timeline_id');
    }

    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
}
