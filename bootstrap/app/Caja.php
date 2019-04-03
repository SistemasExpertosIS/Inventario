<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    protected $table = 'Caja';
    protected $primaryKey = "idCaja";
    protected $fillable = ['Cantidad', 'Descripcion'];

    public function trasladod () {
        return $this->hasMany('App\TrasladoD', 'idCaja', 'idCaja');
    }
}
