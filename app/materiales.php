<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materiales extends Model
{
    protected $fillable = [
        'material','descripcion','grupoArticulos',
    ];
}
