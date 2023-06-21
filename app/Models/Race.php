<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Character;
use App\Models\Favorites;

class Race extends Model
{
    protected $guarded =[];
    public $timestamps = false;
    use HasFactory;
    public function characters() 
    {
        return $this->hasMany(Character::class);
    }
    public function favorites()
    {
        return $this->belongsToMany(Favorites::class);
    }
}