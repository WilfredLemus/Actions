<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colores extends Model
{
    protected $table = 'colores';
    protected $fillable = ['nombre', 'color'];
}
