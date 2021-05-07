<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLINDER</title>
</head>
<body>
<h1 class="log-3">CLINDER</h1>

<form method="post" action="/registar-usu">
    @csrf
        Nombre <br> <input type="text" name="nombre"/><br>
        Apellido<br><input type="text" name="apellido"/><br>
        Edad<br><input type="text" name="edad"/><br>
        Ubicacion<br><input type="text" name="ubicacion"/><br>
        Correo<br><input type="text" name="correo"/><br>
        Contraseña <br><input type="text" name="contraseña"/><br>

        <input type="submit" name="submit" value=" Registrarse"/>

    </form>

</body>

<style>
    .log-3 {
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size:62px;
    }
    .btn{
        height:58px;
        width:120px
    }
    .form-control{
        font-size:20px;
    }
    .btn{
        font-size:20px;
    }
</style>
</html>

