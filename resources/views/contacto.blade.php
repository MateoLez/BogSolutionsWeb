<!DOCTYPE html>
<html lang="e">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Contactar para Información bogsolutions</h1>
    <p>Formulario de contacto BOG Solutions WEB</p>

    <p><strong>Nombre:</strong>{{ $contacto['nombre'] }}</p>
    <p><strong>Correo:</strong>{{ $contacto['correo'] }}</p>
    <p><strong>Celular:</strong>{{ $contacto['celular'] }}</p>
    <p><strong>Empresa:</strong>{{ $contacto['empresa'] }}</p>
    <p><strong>Mensaje:</strong>{{ $contacto['mensaje'] }}</p>
    
</body>
</html>