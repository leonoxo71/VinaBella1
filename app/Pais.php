<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
	protected $table = 'Paises';

    protected $fillable = [
        'cod_pais', 'Nom_pais',
    ];

    public function Ciudades(){
    	return $this->hasMany('App\Ciudad');
    }
}
