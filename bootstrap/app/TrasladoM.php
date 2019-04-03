<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrasladoM extends Model
{
    protected $table = 'TrasladoM';
    protected $primaryKey = "idTrasladoM";
    protected $fillable = ['Descripcion'];

    public function tipomovimiento () {
        return $this->belongsTo('App\TipoMovimiento', 'idTipoMovimiento', 'idTipoMovimiento');
    }
    public function usuariorecibe () {
        return $this->belongsTo('App\User', 'idUsuarioRecibe', 'id');
    }
    public function usuarioenvia () {
        return $this->belongsTo('App\User', 'idUsuarioEnvia', 'id');
    }
    public function sucursalrecibe () {
        return $this->belongsTo('App\Sucursal', 'idSucursalRecibe', 'idSucursal');
    }
    public function sucursalenvia () {
        return $this->belongsTo('App\Sucursal', 'idSucursalEnvia', 'idSucursal');
    }
    public function transporte () {
        return $this->belongsTo('App\Transporte', 'idTransporte', 'idTransporte');
    }

    public function trasladod () {
        return $his->hasOne('App\TrasladoD', 'idTrasladoM', 'idTrasladoM');
    }
}
