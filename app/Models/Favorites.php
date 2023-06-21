<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Race;
use App\Models\Organiz;
use App\Models\Character;

class Favorites extends Model
{
    use HasFactory;
    protected $guarded =[];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function race()
    {
        return $this->belongsToMany(Race::class);
    }
    public function character()
    {
        return $this->belongsToMany(Character::class);
    }
    public function Organiz()
    {
        return $this->belongsToMany(Organiz::class);
    }

}
