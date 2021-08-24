<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de pacientes</title>
</head>
<body>
    <div>
        Menu: 
        <ul>
            <li><a href="{{ route('pacientes.index') }}">Pacientes</a></li>
            <li><a href="{{ route('consultas.index') }}">Consultas</a></li>
        </ul>
    </div>

    
    <h1>Lista de consultas</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Diagnóstico</th>
                <th>Receta</th>
                <th>Fecha de creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($consultas as $consulta)    
            <tr>
                <td>{{ $consulta->id }}</td>
                <td>{{ $consulta->diagnostico }}</td>
                <td>{{ $consulta->receta }}</td>
                <td>{{ $consulta->created_at }}</td>
                <td>
                    <a href="{{ route('consultas.show', $consulta->id) }}">Ver detalles</a>
                    <a href="{{ route('consultas.edit', $consulta->id) }}">Editar</a>
                    <form onsubmit="return confirmarBorrado()" class="form-borrar" action="{{ route('consultas.destroy', $consulta->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <a href="{{ route('consultas.create') }}">Registrar consulta</a>
    <script>
// Aquí viene el código Javascript
// elems = document.getElementsByTagName("form");
// console.log(elems);

function confirmarBorrado() {
    var confirmacion = confirm("Está seguro de borrar este registro?");
    if (confirmacion) {
        return true;
    }
    else {
        return false;
    }
}
    </script>
</body>
</html>