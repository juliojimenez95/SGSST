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
        $empleado=Empleado::all();
       /* foreach($empleado as $em){

            return $em->primer_nombre;
        }*/
        //dd($empresas);
        return view("empleado.index",['empleado'=>$empleado]

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
        return view("empleado.crear_empleado");
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
                'fecha_ter_dosis.required' => 'la fecha de la tercer dosis es  requerida',
                'fecha_ter_dosis.date' => 'la fecha de la tercer dosis   un dato tipo fecha',
                'activo.required' => 'si esta activo es requerido  requerido',
                'es_instructor.required' => 'si es instructor es requerido ',


            ]
        );

        $empleado = new Empleado;
        $empleado->primer_nombre= $request->primer_nombre;
        $empleado->segundo_nombre= $request->segundo_nombre;
        $empleado->primer_apellido = $request->primer_apellido;
        $empleado->segundo_apellido = $request->segundo_apellido;
        $empleado->id_cargo = $request->id_cargo;
        $empleado->id_nivel_estudio = $request->id_nivel_estudio;
        $empleado->fecha_ingreso = $request->fecha_ingreso;
        $empleado->tipo_documento = $request->tipo_documento;
        $empleado->identificacion = $request->identificacion;
        $empleado->fecha_nac = $request->fecha_nac;
        $empleado->edad = $request->edad;
        $empleado->id_nivel_estudio = $request->id_nivel_estudio;
        $empleado->genero = $request->genero;
        $empleado->tipo_sangre = $request->tipo_sangre;
        $empleado->turno_trabajo = $request->turno_trabajo;
        $empleado->telefono_fijo = $request->telefono_fijo;
        $empleado->celular = $request->celular;
        $empleado->email = $request->email;
        $empleado->direccion = $request->direccion;
        $empleado->barrio = $request->barrio;
        $empleado->municipio = $request->municipio;
        $empleado->estrato = $request->estrato;
        $empleado->etnia = $request->etnia;
        $empleado->comp_familiar = $request->comp_familiar;
        $empleado->estado_civil = $request->estado_civil;
        $empleado->no_hijos = $request->no_hijos;
        $empleado->tipo_contrato = $request->tipo_contrato;
        $empleado->eps = $request->eps;
        $empleado->afp = $request->afp;
        $empleado->ccf = $request->ccf;
        $empleado->arl = $request->arl;
        $empleado->sufre_enf = $request->sufre_enf;
        $empleado->cual_enf = $request->cual_enf;
        $empleado->toma_med = $request->toma_med;
        $empleado->cual_med = $request->cual_med;
        $empleado->contacto_emerg = $request->contacto_emerg;
        $empleado->parent_emerg = $request->parent_emerg;
        $empleado->telefono_emerg = $request->telefono_emerg;
        $empleado->induccion_sst = $request->induccion_sst;
        $empleado->fecha_retiro = $request->fecha_retiro;
        $empleado->rango_tiempo_emp = $request->rango_tiempo_emp;
        $empleado->es_vacunado_covid = $request->es_vacunado_covid;
        $empleado->fecha_prim_dosis = $request->fecha_prim_dosis;
        $empleado->fecha_seg_dosis = $request->fecha_seg_dosis;
        $empleado->fecha_ter_dosis = $request->fecha_ter_dosis;
        $empleado->activo = $request->activo;
        $empleado->es_instructor = $request->es_instructor;
        $empleado->save();

        return back()->with('message','el empleado se creo exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // mostrar informacion final del usuario en la base de datos


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
        $empleado = Empleado::where('id',$id)->first();
        /* foreach($empleado as $em){

            return $em->id;
        }*/

        return view('empleado.edit_empleado', [
            'empleado' => $empleado
        ]);
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
                'fecha_ter_dosis.required' => 'la fecha de la tercer dosis es  requerida',
                'fecha_ter_dosis.date' => 'la fecha de la tercer dosis   un dato tipo fecha',
                'activo.required' => 'si esta activo es requerido  requerido',
                'es_instructor.required' => 'si es instructor es requerido ',


            ]
        );
        $empleado = new Empleado;
        $empleado->primer_nombrea= $request->primer_nombre;
        $empleado->primer_apellido = $request->direccion_empresa;
        $empleado->id_cargo = $request->id_cargo;
        $empleado->id_nivel_estudio = $request->id_nivel_estudio;
        $empleado->fecha_ingreso = $request->fecha_ingreso;
        $empleado->tipo_documento = $request->tipo_documento;
        $empleado->identificacion = $request->identificacion;
        $empleado->fecha_nac = $request->fecha_nac;
        $empleado->edad = $request->edad;
        $empleado->id_nivel_estudio = $request->id_nivel_estudio;
        $empleado->genero = $request->genero;
        $empleado->tipo_sangre = $request->tipo_sangre;
        $empleado->turno_trabajo = $request->turno_trabajo;
        $empleado->celular = $request->celular;
        $empleado->email = $request->email;
        $empleado->direccion = $request->direccion;
        $empleado->barrio = $request->barrio;
        $empleado->municipio = $request->municipio;
        $empleado->estrato = $request->estrato;
        $empleado->tipo_contrato = $request->tipo_contrato;
        $empleado->eps = $request->eps;
        $empleado->afp = $request->afp;
        $empleado->ccf = $request->ccf;
        $empleado->arl = $request->arl;
        $empleado->sufre_enf = $request->sufre_enf;
        $empleado->cual_enf = $request->cual_enf;
        $empleado->toma_med = $request->toma_med;
        $empleado->cual_med = $request->cual_med;
        $empleado->contacto_emerg = $request->contacto_emerg;
        $empleado->parent_emerg = $request->parent_emerg;
        $empleado->telefono_emerg = $request->telefono_emerg;
        $empleado->induccion_sst = $request->induccion_sst;
        $empleado->fecha_retiro = $request->fecha_retiro;
        $empleado->rango_tiempo_emp = $request->rango_tiempo_emp;
        $empleado->es_vacunado_covid = $request->es_vacunado_covid;
        $empleado->fecha_prim_dosis = $request->fecha_prim_dosis;
        $empleado->fecha_seg_dosis = $request->fecha_seg_dosis;
        $empleado->fecha_ter_dosis = $request->fecha_ter_dosis;
        $empleado->activo = $request->activo;
        $empleado->es_instructor = $request->es_instructor;
        $empleado->save();

        return back()->with('message','el empleado se actualizo  exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        Empleado::where('id',$id)->delete();

        return back();
    }
}
