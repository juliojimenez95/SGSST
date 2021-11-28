<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <h1> la buena</h1>


        <form action="{{ route('empleados.store') }}" method="post">
        @csrf
            <div class="row">

                <div class="col-5">
                    <label for="primer_nombre" class="form-label">primer nombre </label>
                    <input type="text" class="form-control" name="primer_nombre" id="primer_nombre" placeholder= "introduzca el primer nombre">
                    @if ($errors->has('primer_nombre'))
                      <p class="text-danger">{{ $errors->first('primer_nombre') }}</p>
                    @endif
                 </div>

                 <div class="col-5">
                    <label for="segundo_nombre" class="form-label">segundo nombre</label>
                    <input type="text" class="form-control" name="segundo_nombre" id="segundo_nombre" placeholder= "introduzca el segundo nombre">
                    @if ($errors->has('segundo_nombre'))
                      <p class="text-danger">{{ $errors->first('segundo_nombre') }}</p>
                    @endif
                  </div>
                  <div class="col-5">
                    <label for="primer_apellido" class="form-label">primer apellido </label>
                    <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" placeholder= "introduzca el primer apellido">
                    @if ($errors->has('primer_apellido'))
                      <p class="text-danger">{{ $errors->first('primer_apellido') }}</p>
                    @endif
                 </div>

                 <div class="col-5">
                    <label for="segundo_apellido" class="form-label">segundo apellido</label>
                    <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido" placeholder= "introduzca el segundo apellido">
                    @if ($errors->has('segundo_nombre'))
                      <p class="text-danger">{{ $errors->first('segundo_apellido') }}</p>
                    @endif
                  </div>
                  <div class="col-5">
                    <label for="id_cargo" class="form-label">id del cargo </label>
                    <input type="number" class="form-control" name="id_cargo" id="id_cargo" placeholder= "introduzca el id del cargo">
                    @if ($errors->has('primer_nombre'))
                      <p class="text-danger">{{ $errors->first('id_cargo') }}</p>
                    @endif
                 </div>

                 <div class="col-5">
                    <label for="id_nivel_estudio" class="form-label">nivel de estudio</label>
                    <input type="number" class="form-control" name="id_nivel_estudio" id="id_nivel_estudio" placeholder= "introduzca su nivel de estudio ">
                    @if ($errors->has('id_nivel_estudio'))
                      <p class="text-danger">{{ $errors->first('id_nivel_estudio') }}</p>
                    @endif
                  </div>
                  <div class="col-5">
                    <label for="fecha_ingreso" class="form-label">fecha de ingreso </label>
                    <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso" placeholder= "introduzca la fecha de in greso">
                    @if ($errors->has('fecha_ingreso'))
                      <p class="text-danger">{{ $errors->first('fecha_ingreso') }}</p>
                    @endif
                 </div>

                 <div class="col-5">
                    <label for="tipo_documento" class="form-label">tipo de documento</label>
                    <input type="number" class="form-control" name="tipo_documento" id="tipo_documento" placeholder= "introduzca tipo de documento">
                    @if ($errors->has('tipo_documento'))
                      <p class="text-danger">{{ $errors->first('tipo_documento') }}</p>
                    @endif
                  </div>
                  <div class="col-5">
                    <label for="identificacion" class="form-label">identificacion  </label>
                    <input type="number" class="form-control" name="identificacion" id="identificacion" placeholder= "introduzca su identificacion">
                    @if ($errors->has('identificacion'))
                      <p class="text-danger">{{ $errors->first('identificacion') }}</p>
                    @endif
                 </div>

                  <div class="col-5">
                    <label for="fecha_nac" class="form-label">fecha de nacimiento </label>
                    <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" placeholder= "introduzca la fecha de nacimiento">
                    @if ($errors->has('fecha_nac'))
                      <p class="text-danger">{{ $errors->first('fecha_nac') }}</p>
                    @endif
                 </div>

                 <div class="col-5">
                    <label for="edad" class="form-label">edad</label>
                    <input type="number" class="form-control" name="edad" id="edad" placeholder= "introduzca la edad ">
                    @if ($errors->has('edad'))
                      <p class="text-danger">{{ $errors->first('edad') }}</p>
                    @endif
                  </div>
                  <div class="col-5">
                    <label for="genero" class="form-label">genero </label>
                    <input type="text" class="form-control" name="genero" id="genero" placeholder= "introduzca el genero">
                    @if ($errors->has('genero'))
                      <p class="text-danger">{{ $errors->first('genero') }}</p>
                    @endif
                 </div>

                 <div class="col-5">
                    <label for="tipo_sangre" class="form-label">tipo de sangre</label>
                    <input type="text" class="form-control" name="tipo_sangre" id="tipo_sangre" placeholder= "introduzca el tipo de sangre">
                    @if ($errors->has('tipo_sangre'))
                      <p class="text-danger">{{ $errors->first('tipo_sangre') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="turno_trabajo" class="form-label">turno trabajado </label>
                    <input type="text" class="form-control" name="turno_trabajo" id="turno_trabajo" placeholder= "introduzca el turno trabajado">
                    @if ($errors->has('turno_trabajo'))
                      <p class="text-danger">{{ $errors->first('turno_trabajo') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="telefono_fijo" class="form-label">telefono fijo </label>
                    <input type="text" class="form-control" name="telefono_fijo" id="telefono_fijo" placeholder= "introduzca el telefono fijo">
                    @if ($errors->has('telefono_fijo'))
                      <p class="text-danger">{{ $errors->first('telefono_fijo') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="celular" class="form-label">Celular</label>
                    <input type="text" class="form-control" name="celular" id="celular" placeholder= "introduzca el numero de celular">
                    @if ($errors->has('celular'))
                      <p class="text-danger">{{ $errors->first('celular') }}</p>
                    @endif
                  </div>
                  <div class="col-5">
                    <label for="email" class="form-label">correo </label>
                    <input type="email" class="form-control" name="email" id="email" placeholder= "introduzca el correo electronico">
                    @if ($errors->has('email'))
                      <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="direccion" class="form-label">direccion</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder= "introduzca la direccion">
                    @if ($errors->has('direccion'))
                      <p class="text-danger">{{ $errors->first('direccion') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="barrio" class="form-label">barrio</label>
                    <input type="text" class="form-control" name="barrio" id="barrio" placeholder= "introduzca el barrio ">
                    @if ($errors->has('barrio'))
                      <p class="text-danger">{{ $errors->first('barrio') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="municipio" class="form-label">municipio</label>
                    <input type="text" class="form-control" name="municipio" id="municipio" placeholder= "introduzca el municipio ">
                    @if ($errors->has('municipio'))
                      <p class="text-danger">{{ $errors->first('municipio') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="estrato" class="form-label">estrato</label>
                    <input type="number" class="form-control" name="estrato" id="estrato" placeholder= "introduzca el estrato ">
                    @if ($errors->has('estrato'))
                      <p class="text-danger">{{ $errors->first('estrato') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="etnia" class="form-label">etnia</label>
                    <input type="text" class="form-control" name="etnia" id="etnia" placeholder= "introduzca el etnia ">
                    @if ($errors->has('etnia'))
                      <p class="text-danger">{{ $errors->first('etnia') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="comp_familiar" class="form-label">composicion familiar</label>
                    <input type="text" class="form-control" name="comp_familiar" id="comp_familiar" placeholder= "introduzca la composicion familiar ">
                    @if ($errors->has('barrio'))
                      <p class="text-danger">{{ $errors->first('barrio') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="estado_civil" class="form-label">estado civil</label>
                    <input type="text" class="form-control" name="estado_civil" id="estado_civil" placeholder= "introduzca estado civil ">
                    @if ($errors->has('estado_civil'))
                      <p class="text-danger">{{ $errors->first('estado_civil') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="no_hijos" class="form-label">tiene hijos</label>
                    <input type="number" class="form-control" name="no_hijos" id="no_hijos" placeholder= "introduzca si tiene hijos ">
                    @if ($errors->has('no_hijos'))
                      <p class="text-danger">{{ $errors->first('no_hijos') }}</p>
                    @endif
                  </div>


                  <div class="col-5">
                    <label for="tipo_contrato" class="form-label">tipo de contrato</label>
                    <input type="text" class="form-control" name="tipo_contrato" id="tipo_contrato" placeholder= "introduzca tipo de contrato ">
                    @if ($errors->has('tipo_contrato'))
                      <p class="text-danger">{{ $errors->first('tipo_contrato') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="eps" class="form-label">eps</label>
                    <input type="text" class="form-control" name="eps" id="eps" placeholder= "introduzca eps ">
                    @if ($errors->has('eps'))
                      <p class="text-danger">{{ $errors->first('eps') }}</p>
                    @endif
                  </div>
                  <div class="col-5">
                    <label for="afp" class="form-label">afp</label>
                    <input type="text" class="form-control" name="afp" id="afp" placeholder= "introduzca afp ">
                    @if ($errors->has('afp'))
                      <p class="text-danger">{{ $errors->first('afp') }}</p>
                    @endif
                  </div>
                  <div class="col-5">
                    <label for="ccf" class="form-label">ccf</label>
                    <input type="text" class="form-control" name="ccf" id="ccf" placeholder= "introduzca el ccf ">
                    @if ($errors->has('ccf'))
                      <p class="text-danger">{{ $errors->first('ccf') }}</p>
                    @endif
                  </div>


                  <div class="col-5">
                    <label for="arl" class="form-label">arl</label>
                    <input type="text" class="form-control" name="arl" id="arl" placeholder= "introduzca el arl ">
                    @if ($errors->has('arl'))
                      <p class="text-danger">{{ $errors->first('arl') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="sufre_enf" class="form-label">sufre enfermedades </label>
                    {{--<input type="text" class="form-control" name="sufre_enf" id="sufre_enf" placeholder= "introduzca s ">--}}
                    <select  name= "sufre_enf"  id="sufre_enf" class="form-control">
                        <option value="1"> Si</option>
                        <option value="0"> No </option>
                    </select>
                    @if ($errors->has('sufre_enf'))
                      <p class="text-danger">{{ $errors->first('sufre_enf') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="cual_enf" class="form-label">cual enfermedad </label>
                    <input type="text" class="form-control" name="cual_enf" id="cual_enf" placeholder= "introduzca cual enfermedad ">
                    @if ($errors->has('cual_enf'))
                      <p class="text-danger">{{ $errors->first('cual_enf') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="toma_med" class="form-label"> toma medicamento </label>
                    {{--<input type="text" class="form-control" name="toma_med" id="toma_med" placeholder= "introduzca toma medicamento ">--}}
                    <select  name= "toma_med"  id="toma_med" class="form-control">
                        <option value="1"> Si</option>
                        <option value="0"> No </option>
                        </select>
                    @if ($errors->has('toma_med'))
                      <p class="text-danger">{{ $errors->first('toma_med') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="cual_med" class="form-label">cual medicamento</label>
                    <input type="text" class="form-control" name="cual_med" id="cual_med" placeholder= "introduzca cual medicamento ">
                    @if ($errors->has('cual_enf'))
                      <p class="text-danger">{{ $errors->first('cual_enf') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="contacto_emerg" class="form-label">contacto de emergencia</label>
                    <input type="text" class="form-control" name="contacto_emerg" id="contacto_emerg" placeholder= "introduzca el contacto de emergencia ">
                    @if ($errors->has('contacto_emerg'))
                      <p class="text-danger">{{ $errors->first('contacto_emerg') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="parent_emerg" class="form-label">parentezco</label>
                    <input type="text" class="form-control" name="parent_emerg" id="parent_emerg" placeholder= "introduzca el parentezco ">
                    @if ($errors->has('parent_emerg'))
                      <p class="text-danger">{{ $errors->first('parent_emerg') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="telefono_emerg" class="form-label">telefono de emergencia</label>
                    <input type="text" class="form-control" name="telefono_emerg" id="telefono_emerg" placeholder= "introduzca el telefono de emergencia ">
                    @if ($errors->has('telefono_emerg'))
                      <p class="text-danger">{{ $errors->first('telefono_emerg') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="induccion_sst" class="form-label">introduccion sst </label>
                    {{--<input type="text" class="form-control" name="induccion_sst" id="induccion_sst" placeholder= "introduzca sst">--}}
                    <select  name= "induccion_sst"  id="induccion_sst" class="form-control">
                        <option value="1"> Si</option>
                        <option value="0"> No </option>
                        </select>
                    @if ($errors->has('induccion_sst'))
                      <p class="text-danger">{{ $errors->first('induccion_sst') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="fecha_retiro" class="form-label">fecha de retiro </label>
                    <input type="date" class="form-control" name="fecha_retiro" id="fecha_retiro" placeholder= "introduzca fecha de retiro">
                    @if ($errors->has('fecha_retiro'))
                      <p class="text-danger">{{ $errors->first('fecha_retiro') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="rango_tiempo_emp" class="form-label">rango de tiempo </label>
                    <input type="text" class="form-control" name="rango_tiempo_emp" id="rango_tiempo_emp" placeholder= "introduzca el rango de tiempo">
                    @if ($errors->has('rango_tiempo_emp'))
                      <p class="text-danger">{{ $errors->first('rango_tiempo_emp') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="es_vacunado_covid" class="form-label">vacunado contra el covid </label>
                    {{--<input type="text" class="form-control" name="es_vacunado_covid" id="es_vacunado_covid" placeholder= "introduzca es vacunado covid">--}}
                    <select  name= "es_vacunado_covid"  id="es_vacunado_covid" class="form-control">
                        <option value="1"> Si</option>
                        <option value="0"> No </option>
                        </select>
                    @if ($errors->has('es_vacunado_covid'))
                      <p class="text-danger">{{ $errors->first('es_vacunado_covid') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="fecha_prim_dosis" class="form-label">fecha primer dosis </label>
                    <input type="date" class="form-control" name="fecha_prim_dosis" id="fecha_prim_dosis" placeholder= "introduzca fecha de la primer dosis">
                    @if ($errors->has('fecha_prim_dosis'))
                      <p class="text-danger">{{ $errors->first('fecha_prim_dosis') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="fecha_seg_dosis" class="form-label">fecha de segunda dosis  </label>
                    <input type="date" class="form-control" name="fecha_seg_dosis" id="fecha_seg_dosis" placeholder= "introduzca fecha de la segunda dosis">
                    @if ($errors->has('fecha_seg_dosis'))
                      <p class="text-danger">{{ $errors->first('fecha_seg_dosis') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="fecha_ter_dosis" class="form-label">fecha de la tercer dosis </label>
                    <input type="date" class="form-control" name="fecha_ter_dosis" id="fecha_ter_dosis" placeholder= "introduzca fecha de la tercer dosis">
                    @if ($errors->has('fecha_ter_dosis'))
                      <p class="text-danger">{{ $errors->first('fecha_ter_dosis') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="activo" class="form-label"> Activo </label>
                    {{--<input type="text" class="form-control" name="activo" id="activo" placeholder= "introduzca es activo ?">--}}
                    <select  name= "activo"  id="activo" class="form-control">
                        <option value="1"> Si</option>
                        <option value="0"> No </option>
                        </select>
                    @if ($errors->has('fecha_prim_dosis'))
                      <p class="text-danger">{{ $errors->first('fecha_prim_dosis') }}</p>
                    @endif
                  </div>

                  <div class="col-5">
                    <label for="es_instructor" class="form-label"> instructor</label>
                   {{-- <input type="text" class="form-control" name="es_instructor" id="es_instructor" placeholder= "es instructor ?">--}}
                   <select  name= "es_instructor"  id="es_instructor" class="form-control">
                    <option value="1"> Si</option>
                    <option value="0"> No </option>
                    </select>
                    @if ($errors->has('es_instructor'))
                      <p class="text-danger">{{ $errors->first('es_instructor') }}</p>
                    @endif
                  </div>
                  <center>
                  <div class="col-12 estilo_center">
                    <button type="submit" class="btn btn-primary estilo_boton" nombre="enviar" id="enviar">enviar</button>
                  </div>
                </center>


            </div>

        </form>

</body>
</html>
