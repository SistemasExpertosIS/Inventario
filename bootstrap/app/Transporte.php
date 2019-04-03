<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    protected $table = 'Transporte';
    protected $primaryKey = "idTransporte";
    protected $fillable = ['Placa', 'NombreChofer', 'idChofer'];

    public function trasladom () {
        return $this->hasOne('App\TrasladoM', 'idTransporte', 'idTransporte');
    }
}
