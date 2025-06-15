<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenu extends Model
{
    use HasFactory;
    protected $fillable = ['titre','titre_en','libelle','libelle_en','video1','video1_en','video2','video2_en'];
}
