<!DOCTYPE html>
<html>
  <head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="libs/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/css/estiloMenu.css">
    <link rel="stylesheet" href="libs/css/asistencia.css">
  </head>
  <body>
    <footer>
      <div class="navegacion">
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: black; opacity:0.7">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="libs/multimedia/img/hut.png" class="img-responsive img-rounded"   width="25" height="25" ></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="menuAdmin.php?modo=crudEmpleado">Empleados</a></li>
              <li><a href="menuAdmin.php?modo=controlAsis">Control de Asistencia</a></li>
              <li><a href="menuAdmin.php?modo=reportes">Reportes</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#login" data-toggle="modal"><span class="fa fa-sign-in"></span> Usuario</a></li>
            </ul>
          </div>
        </div>
      </nav>
      </div>
    </footer>
