<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = 'Inventario';
    protected $primaryKey = "idInventario";
    protected $fillable = ['Saldo'];

    public function sucursal () {
        return $this->belongsTo('App\Sucursal', 'idSucursal', 'idSucursal');
    }
    public function producto () {
        return $this->belongsTo('App\Productos', 'idProducto', 'idProducto');
    }
    public function tipomovimiento () {
        return $this->belongsTo('App\TipoMovimiento', 'TipoMovimiento_idTipoMovimiento', 'idTipoMovimiento');
    }
}
