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
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">apellido</th>
                <th scope="col">identificacion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleado as $em)

            <tr>
                <td>{{$em->id}}</td>
                <td>{{$em->primer_nombre}}</td>
                <td>{{$em->primer_apellido}}</td>
                <td>{{$em->identificacion}}</td>
                <td>

                    <a href="{{route('empleados.edit', $em->id )}}" class="btn btn-warning">Editar</a>
                    <form action="{{route('empleados.delete', $em->id )}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
