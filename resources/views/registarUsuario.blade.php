<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Ubicacion</th>
        <th>Correo</th>
        <th>Contraseña</th>
    </tr>
    <form method="post" action="/registar-usu">
        @csrf
    <tr>
        <th><input type="text" name="nombre"/></th>
        <th><input type="text" name="apellido"/></th>
        <th><input type="text" name="edad"/></th>
        <th><input type="text" name="ubicacion"/></th>
        <th><input type="text" name="correo"/></th>
        <th><input type="text" name="contraseña"/></th>

    </tr>
    <tr>
        <td><input type="submit" name="submit" value="guardarusuario"/></td>
    </tr>
    </form>

</table>

