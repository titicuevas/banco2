<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{


    use HasFactory;

protected $table = 'cuentas';

protected $fillable = [
    'numero',
];

public function clientes(){

    return $this->belongsToMany(Cliente::class);
}


public function movimientos (){

    return $this->hasMany(Movimiento::class,'titulares');
}

}
