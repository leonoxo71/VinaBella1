<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'Clientes';

    protected $fillable = [
        'Nro_doc', 'Nombre', 'Ap_paterno', 'Ap_materno', 'Telefono', 'Correo_electronico', 'Tipo_documento', 'Calle_res', 'Ciudad_res',
        ];

    public function Ciudad(){
    	return $this->belongsTo('App\Ciudad');
    }
}
