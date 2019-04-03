<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'Productos';
    protected $primaryKey = "idProducto";
    protected $fillable = ['Nombre', 'Codigo', 'Descripcion', 'habilitado'];

    public function trasladod () {
        return $this->hasMany('App\TrasladoD', 'idProducto', 'idProducto');
    }
    public function inventario () {
        return $this->hasMany('App\Inventario', 'idProducto', 'idProducto');
    }
}
