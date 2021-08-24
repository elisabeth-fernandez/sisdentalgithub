<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de consulta</title>
</head>
<body>
    <h1>Detalles de consulta</h1>
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $consulta->id }}</td>
        </tr>
        <tr>
            <th>Paciente</th>
            <td>{{ $consulta->paciente->nombre }}</td>
        </tr>
        <tr>
            <th>Edad</th>
            <td>{{ $consulta->paciente->edad }}</td>
        </tr>
        <tr>
            <th>Diagnóstico</th>
            <td>{{ $consulta->diagnostico }}</td>
        </tr>
        <tr>
            <th>Receta</th>
            <td>{{ $consulta->receta }}</td>
        </tr>
        <tr>
            <th>Fecha y hora de creación</th>
            <td>{{ $consulta->created_at }}</td>
        </tr>
    </table>
    <a href="{{ route('consultas.index') }}">Volver</a>
</body>
</html>