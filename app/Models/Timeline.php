<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function universe()
    {
        return $this->belongsTo(Universe::class, 'universe_id');
    }

    public function comics()
    {
        return $this->hasMany(Comic::class);
    }
}
