<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de paciente</title>
</head>
<body>
    <h1>Detalles de paciente</h1>
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $paciente->id }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $paciente->nombre }}</td>
        </tr>
        <tr>
            <th>CI</th>
            <td>{{ $paciente->ci }}</td>
        </tr>
        <tr>
            <th>Whatsapp</th>
            <td>{{ $paciente->whatsapp }}</td>
        </tr>
        <tr>
            <th>Fecha de nacimiento</th>
            <td>{{ $paciente->fecha_nac }}</td>
        </tr>
        <tr>
            <th>Edad</th>
            <td>{{ $paciente->edad }} años</td>
        </tr>
        <tr>
            <th>Fecha y hora de creación</th>
            <td>{{ $paciente->created_at }}</td>
        </tr>
    </table>

    <h3>Historial de consultas</h3>

    @forelse ($paciente->consultas as $consulta)
        <table>
            <tr>
                <th>Fecha</th>
                <td>{{ $consulta->created_at->format('d/m/Y H:i') }}</td>
            </tr>
            <tr>
                <th>Diagnóstico</th>
                <td>{{ $consulta->diagnostico }}</td>
            </tr>
            <tr>
                <th>Receta</th>
                <td>{{ $consulta->receta }}</td>
            </tr>
        </table>
    @empty
        <p>No se encontró ninguna consulta registrada.</p>
    @endforelse
    
    

    <a href="{{ route('pacientes.index') }}">Volver</a>
</body>
</html>