<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Hotspot Mikrotik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Usuarios Activos en Hotspot</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Dirección IP</th>
                    <th>Tiempo conectado (Uptime)</th>
                    <th>Tiempo de sesión restante</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user['user'] }}</td>
                    <td>{{ $user['address'] }}</td>
                    <td>{{ $user['uptime'] }}</td>
                    <td>{{ $user['session_time_left'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>