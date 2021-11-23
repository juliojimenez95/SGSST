<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados_table', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->bigInteger('id_cargo');
            $table->bigInteger('id_nivel_estudio');
            $table->date('fecha_ingreso');
            $table->integer('tipo_documento');
            $table->bigInteger('identificacion');
            $table->date('fecha_nac');
            $table->integer('edad');
            $table->string('genero');
            $table->string('tipo_sangre');
            $table->string('turno_trabajo');
            $table->string('telefono_fijo');
            $table->string('celular');
            $table->string('email')->unique();
            $table->string('direccion');
            $table->string('barrio');
            $table->string('municipio');
            $table->smallInteger('estrato');
            $table->string('etnia');
            $table->string('comp_familiar');
            $table->string('estado_civil');
            $table->smallInteger('no_hijos');
            $table->string('tipo_contrato');
            $table->string('eps');
            $table->string('afp');
            $table->string('ccf');
            $table->string('arl');
            $table->boolean('sufre_enf');
            $table->string('cual_enf');
            $table->boolean('toma_med');
            $table->string('cual_med');
            $table->string('contacto_emerg');
            $table->string('parent_emerg');
            $table->string('telefono_emerg');
            $table->boolean('induccion_sst');
            $table->date('fecha_retiro');
            $table->string('rango_tiempo_emp');
            $table->string('es_vacunado_covid');
            $table->date('fecha_prim_dosis');
            $table->date('fecha_seg_dosis');
            $table->date('fecha_ter_dosis');
            $table->boolean('activo');
            $table->boolean('es_instructor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados_table');
    }
}
