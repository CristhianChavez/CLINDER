<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Ubicacion</th>
        <th>Correo</th>
        <th>Contraseña</th>
    </tr>
        <tr>
            @foreach($resultado as $usuario)
                <th>{{$usuario["nombre"]}}</th>
                <th>{{$usuario["apellido"]}}</th>
                <th>{{$usuario["edad"]}}</th>
                <th>{{$usuario["ubicacion"]}}</th>
                <th>{{$usuario["correo"]}}</th>
                <th>{{$usuario["contraseña"]}}</th>

            @endforeach
        </tr>
</table>

