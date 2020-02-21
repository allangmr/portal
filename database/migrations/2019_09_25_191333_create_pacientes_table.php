<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nombre', 100);
            $table->string('identidad', 100)->unique()->nullable();
            $table->dateTime('fec_entrada')->nullable();
            $table->dateTime('fec_salida')->nullable();
            $table->text('medico')->nullable();
            $table->text('aseguradora_uno')->nullable();
            $table->string('poliza_uno')->nullable();
            $table->text('aseguradora_dos')->nullable();
            $table->string('poliza_dos')->nullable();
            $table->text('aseguradora_tres')->nullable();
            $table->string('poliza_tres')->nullable();
            $table->string('num_formulario',50)->nullable();
            $table->text('hospital')->nullable();
            $table->string('piso_hospital', 10)->nullable();
            $table->string('habitacion',25)->nullable();
            $table->string('observación',255)->nullable();
            $table->decimal('monto_pasado',8,2)->nullable();
            $table->decimal('monto_recibido',8,2)->nullable();
            $table->string('detalle_pago',200)->unique()->nullable();
            $table->dateTime('fec_entrega_factura_seguro')->nullable();
            $table->dateTime('fec_recibo_pago')->nullable();
            $table->text('estado_paciente');
            $table->text('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
