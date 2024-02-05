<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredienten extends Model
{
    use HasFactory;

    protected $fillable = ['topping', 'prijs', 'eenheden_id'];
}
