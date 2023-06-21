<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Organiz;
use App\Models\Race;
use App\Models\Favorites;

class Character extends Model
{
   use HasFactory;
   protected $guarded =[];
   public $timestamps = false;

   public function Organiz(): BelongsTo {
        return $this->belongsTo(Organiz::class);
   }
   
   public function Race(): BelongsTo {
         return $this->belongsTo(Race::class);
   }
   public function favorites()
   {
      return $this->belongsToMany(Favorites::class);
      }
}
