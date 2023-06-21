<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\DiseaseController;

class Disease extends Model
{
    
    protected $fillable = ['disease_name', 'symptoms', 'mortality', 'description','motherland', 'diseases_add'];
    public $timestamps = false;
    use HasFactory;
}
