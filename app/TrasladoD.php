<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrasladoD extends Model
{
    protected $table = 'TrasladoD';
    protected $primaryKey = "idTrasladoD";
    protected $fillable = ['Cantidad', 'Estado'];

    public function trasladom () {
        return $this->belongsTo('App\TrasladoM', 'idTrasladoM', 'idTrasladoM');
    }
    public function producto () {
        return $this->belongsTo('App\Productos', 'idProducto', 'idProducto');
    }
    public function usuariorecibe () {
        return $this->belongsTo('App\Caja', 'idCaja', 'idCaja');
    }
}
