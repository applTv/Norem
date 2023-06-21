<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Character;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorites;

class Organiz extends Model
{
    use HasFactory;
    protected $guarded =[];
    public $timestamps = false;

     public function characters() {

        return $this->hasMany(Character::class);
     }
   public function favorites()
   {
      return $this->belongsToMany(Favorites::class);
   }
}


