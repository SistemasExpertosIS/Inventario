<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMovimiento extends Model
{
    protected $table = 'TipoMovimiento';
    protected $primaryKey = "idTipoMovimiento";
    protected $fillable = ['Nombre', 'Abv', 'Entrada'];

    public function trasladom () {
        return $this->hasOne('App\TrasladoM', 'idTipoMovimiento', 'idTipoMovimiento');
    }
    public function inventario () {
        return $this->hasOne('App\Inventario', 'TipoMovimiento_idTipoMovimiento', 'idTipoMovimiento');
    }
}
