<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'Ciudades';
	
    protected $fillable = [
        'cod_ciudad', 'nom_ciudad', 'pais',
        ];

    public function Pais(){
    	return $this->belongsTo('App\Pais');
    }

    public function Clientes(){
    	return $this->hasMany('App\Cliente');
    }
}
