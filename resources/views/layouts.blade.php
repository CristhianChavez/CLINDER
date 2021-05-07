<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>CodeStack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JavaScript -->
php

    <!-- CSS -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel='stylesheet'>
    <link href="<?php echo base_url(); ?>public/css/jquery-ui.min.css" rel='stylesheet'>
    <link href="<?php echo base_url(); ?>public/css/style.css" rel='stylesheet'>
</head>
<body>
<div style="background-color:#f1f1f1; width:100%; min-height:90%">
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">CodeStack</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Alumnos <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo base_url(); ?>alumnos/registroAlumnos">Agregar alumno</a></li>
                                <li><a href="<?php echo base_url(); ?>alumnos">Listar alumnos</a></li>
                                <li><a href="<?php echo base_url(); ?>matricula">Matrícula</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Responsables<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo base_url(); ?>responsables/agregarResponsable">Agregar responsable</a></li>
                                <li><a href="<?php echo base_url(); ?>responsables">Listar responsables</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Docentes<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Agregar docente</a></li>
                                <li><a href="#">Listar docentes</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>

    <div class="container">

    </div>
</div>

<footer>
    <div id="footer">
        <div class="col-lg-6" style="color:#f1f1f1">
            <p>Texto de prueba</p>
        </div>
        <div class="col-lg-6" style="color:#f1f1f1">
            <p>Texto de prueba</p>
        </div>
    </div>
</footer>

</body>

</html>
