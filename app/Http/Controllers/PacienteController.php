<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paciente;

class PacienteController extends Controller
{
    /**
     * Muestra listado de todos los pacientes.
     *
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return $pacientes;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $pacientes = Paciente::findOrFail($request->id);
        return $pacientes;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pacientes = new Paciente();
        $pacientes->nombre = $request->nombre;
        $pacientes->identidad = $request->identidad;
        $pacientes->fec_entrada = $request->fec_entrada;
        $pacientes->fec_salida = $request->fec_salida;
        $pacientes->id_medico = $request->id_medico;
        $pacientes->aseguradora_uno = $request->aseguradora_uno;
        $pacientes->poliza_uno = $request->poliza_uno;
        $pacientes->aseguradora_dos = $request->aseguradora_dos;
        $pacientes->poliza_dos = $request->poliza_dos;
        $pacientes->aseguradora_tres = $request->aseguradora_tres;
        $pacientes->poliza_tres = $request->poliza_tres;
        $pacientes->num_formulario = $request->num_formulario;
        $pacientes->hospital = $request->hospital;
        $pacientes->piso_hospital = $request->piso_hospital;
        $pacientes->habitacion = $request->habitacion;
        $pacientes->Observación = $request->Observación;
        $pacientes->monto_pasado = $request->monto_pasado;
        $pacientes->monto_recibido = $request->monto_recibido;
        $pacientes->detalle_pago = $request->detalle_pago;
        $pacientes->fec_entrega_factura_seguro = $request->fec_entrega_factura_seguro;
        $pacientes->fec_recibo_pago = $request->fec_recibo_pago;
        $pacientes->estado_paciente = $request->estado_paciente;
        $pacientes->estado = 1;
        $pacientes->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pacientes = Paciente::findOrFail($request->id);
        $pacientes->nombre = $request->nombre;
        $pacientes->identidad = $request->identidad;
        $pacientes->fec_entrada = $request->fec_entrada;
        $pacientes->fec_salida = $request->fec_salida;
        $pacientes->id_medico = $request->id_medico;
        $pacientes->aseguradora_uno = $request->aseguradora_uno;
        $pacientes->poliza_uno = $request->poliza_uno;
        $pacientes->aseguradora_dos = $request->aseguradora_dos;
        $pacientes->poliza_dos = $request->poliza_dos;
        $pacientes->aseguradora_tres = $request->aseguradora_tres;
        $pacientes->poliza_tres = $request->poliza_tres;
        $pacientes->num_formulario = $request->num_formulario;
        $pacientes->hospital = $request->hospital;
        $pacientes->piso_hospital = $request->piso_hospital;
        $pacientes->habitacion = $request->habitacion;
        $pacientes->Observación = $request->Observación;
        $pacientes->monto_pasado = $request->monto_pasado;
        $pacientes->monto_recibido = $request->monto_recibido;
        $pacientes->detalle_pago = $request->detalle_pago;
        $pacientes->fec_entrega_factura_seguro = $request->fec_entrega_factura_seguro;
        $pacientes->fec_recibo_pago = $request->fec_recibo_pago;
        $pacientes->estado_paciente = $request->estado_paciente;
        $pacientes->estado = 1;
        $pacientes->save();
    }
    public function desactivar(Request $request, $id)
    {
        $pacientes = Paciente::findOrFail($request->id);
        $pacientes->estado = 0;
        $pacientes->save();
    }
    public function activar(Request $request, $id)
    {
        $pacientes = Paciente::findOrFail($request->id);
        $pacientes->estado = 1;
        $pacientes->save();
    }
}
