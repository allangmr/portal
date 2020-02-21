<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //protected $table = 'pacientes';
    //protected $primaryKey = 'id';

    protected $fillable = ['nombre','identidad','fec_entrada','fec_salida','medico',
	'aseguradora_uno','poliza_uno','aseguradora_dos','poliza_dos','aseguradora_tres',
	'poliza_tres','num_formulario','hospital','piso_hospital','habitacion','Observación',
	'monto_pasado','monto_recibido','detalle_pago','fec_entrega_factura_seguro',
	'fec_recibo_pago','estado_paciente','estado'];
}
