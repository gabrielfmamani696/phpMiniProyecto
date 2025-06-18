<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h2>hola Controller</h2>
        <p>
            Nombre: {{ $users->name }}
        </p>
        <p>
            Correo: {{ $users->email }}
        </p>
        <p>
            Password: {{ $users->password }}
        </p>
    </body>
</html>