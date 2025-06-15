<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotDirecteur extends Model
{
    use HasFactory;
    protected $fillable = ['titre','titre_en','short','short_en','description','description_en','image'];
}
