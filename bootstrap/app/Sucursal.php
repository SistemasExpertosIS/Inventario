<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'Sucursal';
    protected $primaryKey = "idSucursal";
    protected $fillable = ['Nombre', 'Direccion', 'Abv'];

    public function sucursalrecibe () {
        return $this->hasOne('App\TrasladoM', 'idSucursal', 'idSucursalRecibe');
    }
    public function sucursalenvia () {
        return $this->hasOne('App\TrasladoM', 'idSucursal', 'idSucursalEnvia');
    }
    
    public function usuario () {
        return $this->belongsTo('App\User', 'idUsuario', 'id');
    }
}
