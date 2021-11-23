<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleados=Empleado::get();
        //dd($empresas);
        return view("empleado.index",['empleado'=>$empleados]

    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("empleados.crear_empleado");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'primer_nombre' => 'required',
                'segundo_nombre',
                'primer_apellido' => 'required',
                'segundo_apellido',
                'id_cargo' => 'required|numeric',
                'id_nivel_estudio' => 'required|numeric',
                'fecha_ingreso' => 'required|date',
                'tipo_documento' => 'required|numeric',
                'identificacion' => 'required|numeric',
                'fecha_nac' => 'required|date',
                'edad' => 'required|numeric',
                'genero' => 'required',
                'tipo_sangre' => 'required',
                'turno_trabajo' => 'required',
                'telefono_fijo',
                'celular' => 'required',
                'email' => 'required|email',
                'direccion' => 'required',
                'barrio' => 'required',
                'municipio' => 'required',
                'estrato' => 'required|numeric',
                'etnia',
                'comp_familiar',
                'estado_civil' ,
                'no_hijos',
                'tipo_contrato' => 'required',
                'eps' => 'required',
                'afp' => 'required',
                'ccf' => 'required',
                'arl' => 'required',
                'sufre_enf' => 'required',
                'cual_enf' => 'required',
                'toma_med' => 'required',
                'cual_med' => 'required',
                'contacto_emerg' => 'required',
                'parent_emerg' => 'required',
                'telefono_emerg' => 'required',
                'induccion_sst' => 'required',
                'fecha_retiro' => 'required|date',
                'rango_tiempo_emp' => 'required',
                'es_vacunado_covid' => 'required',
                'fecha_prim_dosis' => 'required|date',
                'fecha_seg_dosis' => 'required|date',
                'fecha_ter_dosis' => 'required|date',
                'activo' => 'required',
                'es_instructor' => 'required',
            ]
            ,
            [
                'primer_nombre.required' => 'El primer nombre es requerido',
                'primer_apellido.required' => 'El primer apellido es requerido',
                'id_cargo.required' => 'El nit de la empresa es requerido',
                'id_cargo.numeric' => 'El celular debe ser un dato númerico',
                'id_nivel_estudio.required' => 'El nivel  de estudio es requerido',
                'id_nivel_estudio.numeric' => ' el id de estudio debe ser  numerico',
                'fecha_ingreso.require' => 'la fecha de ingreso es obligatoria',
                'fecha_ingreso.date' => 'la fecha de ingreso es obligatoria',
                'tipo_documento.required' => 'El tipo de documento es requerido',
                'tipo_documento.numeric' => 'El tipo de  debe ser numerico',
                'identificacion.required' => 'la identificacion es requerida',
                'identificacion.numeric' => 'El identificacio es un dato numerico',
                'fecha_nac.required' => 'la fecha de nacimiento  es requerida',
                'fecha_nac.date' => 'la fecha de nacimiento  un dato tipo fecha',
                'edad.required' => 'la edad es requerida',
                'edad.numeric' => 'la edad es un  dato ',
                'genero.required' => 'el genero es requerido',
                'tipo_sangre.required' => 'el tipo de sangre es requerido ',
                'turno_trabajo.required' => 'la edad es requerida',
                'celular.required' => 'el celular es requerido ',
                'email.required' => 'El correo es requerido',
                'email.email' => 'El email debe ser real ej. example@example.com',
                'direccion.required' => 'la direccion es requerida',
                'barrio.required' => 'el barrio es requerida',
                'municipio.required' => 'el municipio es requerido',
                'estrato.required' => 'el estracto es requerida',
                'estrato.numeric' => 'el estracto  es un  tipo de dato numerico ',
                'tipo_contrato.required' => 'el tipo de contrato es requerida',
                'eps.required' => 'la eps es requerido',
                'afp.required' => 'el afp es requerido',
                'ccf.required' => 'el ccf es requerido',
                'arl.required' => 'el estracto es requerida',
                'sufre_enf.required' => 'si sufre enfermeades es requerido',
                'cual_enf.required' => 'cual enfermedad es requerida',
                'toma_med.required' => 'si toma medicamentos es requerida',
                'cual_med.required' => 'cual medicamento es requerido',
                'contacto_emerg.required' => 'el contacto de emergencia  es requerido',
                'parent_emerg.required' => 'el contacto de emergencia  es requerido',
                'telefono_emerg.required' => 'el telefono de contacto de emergencia es requerida',
                'induccion_sst.required' => 'la induccion  a sst es requerida',
                'fecha_retiro.required' => 'la fecha de retiro es requerida',
                'rango_tiempo_emp.required' => 'el rango de tiempo   a sst es requerida',
                'es_vacunado_covid.required' => 'si es vacunado  requerido',
                'fecha_prim_dosis.required' => 'la fecha de la primer dosis es  requerida',
                'fecha_prim_dosis.date' => 'la fecha de la primer dosis   un dato tipo fecha',
                'fecha_seg_dosis.required' => 'la fecha de la segunda dosis es  requerida',
                'fecha_seg_dosis.date' => 'la fecha de la segunda dosis   un dato tipo fecha',
                'fecha_prim_dosis.required' => 'la fecha de la primer dosis es  requerida',
                'fecha_prim_dosis.date' => 'la fecha de la primer dosis   un dato tipo fecha',
                'activo.required' => 'si esta activo es requerido  requerido',
                'es_instructor.required' => 'si es instructor es requerido ',




            ]
        );

        $empleado = new Empleado;
        $empleado->nombre_empresa = $request->nombre_empresa;
        $empleado->direccion = $request->direccion_empresa;
        $empleado->nit = $request->nit_empresa;
        $empleado->telefono = $request->celular_empresa;
        $empleado->correo_contacto = $request->correo_empresa;
        $empleado->save();

        return back()->with('message','el empleado se creo exitosamente');echo "hola mundo 2";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        echo "hola mundo 3";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        echo "hola mundo 4";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        echo "hola mundo 5";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        echo "hola mundo 6";
    }
}
