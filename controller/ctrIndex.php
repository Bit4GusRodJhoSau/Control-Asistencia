<?php


class ManagePage
{

  private $Modo;

  public function __construct($modo)
  {
    $this->Modo = $modo;
  }

  public function MenuIndex()
  {

    switch ($this->Modo) {

      case 'AccesDenied':
        include 'view/headerIn.php';
        ?>
        <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>¡ERROR!</strong> <p>Acceso denegado</p>
        </div>
        <?php
        include 'view/bodyIn.php';
        include 'view/footerIn.php';
        break;

      case 'ErrUserInexitente':
        include 'view/headerIn.php';
        ?>
        <div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>¡ERROR!</strong> <p>Usuario Inexistente</p>
        </div>
        <?php
        include 'view/bodyIn.php';
        include 'view/footerIn.php';
        break;

      case 'ErrPass':
        include 'view/headerIn.php';
        ?>
        <div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>¡ERROR!</strong> <p>Error en la contrasenaña</p>
        </div>
        <?php
        include 'view/bodyIn.php';
        include 'view/footerIn.php';
          break;

      case 'CampLlenos':
          include 'model/login.php';
          include 'model/ConsultasBasicas.php';
          include 'model/conexion.php';
          include 'controller/ctrLogin.php';
          include_once 'model/SED.php';
          $login = new Login($_POST['user'],$_POST['pass']);
          $manLogin = new LoginManager();
          $manLogin->Autentificacion($login);
          break;
      case 'salir':
          session_start();
          session_destroy();
          header("Location: index.php");
          break;

      case 'ingresar':
        header("Location: view/menuAdmin.php");
        break;

      default:
        include 'view/headerIn.php';
        include 'view/bodyIn.php';
        include 'view/footerIn.php';
        break;
    }

  }

  public function MenuAdmin()
  {
    switch ($this->Modo) {
      case 'crudEmpleado':
        include 'headerM.php';
        include 'curdempleado.php';
        include 'footerM.php';
        break;
      case 'reportes':
        include 'headerM.php';
        include 'reportes.php';
        include 'footerM.php';
        break;
      case 'controlAsis':
        include 'headerM.php';
        include 'asistencia.php';
        include 'footerM.php';
        break;
      default:
        include 'headerM.php';
        include 'bodyM.php';
        include 'footerM.php';
        break;
    }
  }//FIN menu Admin

}


?>
