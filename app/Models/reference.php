<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reference extends Model
{
    use HasFactory;
    protected $fillable = ['titre','titre_en','libelle','libelle_en','image'];
}