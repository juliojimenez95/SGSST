<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table='empleados';
    protected $fillable=[
        'id','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','id_cargo','id_nivel_estudio',
        'fecha_ingreso','tipo_documento','identificacion','fecha_nac','edad','genero','tipo_sangre','turno_trabajo',
        'telefono_fijo','celular','email','direccion','barrio','municipio','estrato','etnia','comp_familiar','estado_civil',
        'no_hijos','tipo_contrato','eps','afp','ccf','arl','sufre_enf','cual_enf','toma_med','cual_med','contacto_emerg',
        'parent_emerg','telefono_emerg','induccion_sst','fecha_retiro','rango_tiempo_emp','es_vacunado_covid',
        'fecha_prim_dosis','fecha_seg_dosis','fecha_ter_dosis','activo','es_instructor',
    ];
}
