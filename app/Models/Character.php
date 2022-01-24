<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function universe()
    {
        return $this->belongsTo(Universe::class, 'universe_id');
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'character_team');
    }

    public function comics()
    {
        return $this->belongsToMany(Comic::class, 'comic_id');
    }

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('name', 'LIKE', $term)
                ->orWhere('alias', 'LIKE', $term);
        });
    }
}
