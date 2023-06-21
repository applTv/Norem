<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $guarded =[];
    public $timestamps = false;
    use HasFactory;
    // public function OrganizAll() {
    //     return $this->hasMany('App\OrganizAll', 'Organiz_name', 'Organiz_name');
    // }
    
}