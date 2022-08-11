<?php

/**
*
*/
class ViewsManager
{

  private $head;
  private $fileName;

  function __construct()
  {
    $this->head = new Head();
  }

  function setFileName($fileName) {

    $this->fileName = $fileName;
    if($fileName == "login.php") {
      $this->generateBody();
    } else if($fileName == "home.php"){
      $this->generateAdminBody();
    } else if($fileName == "heroes.php"){
      $this->generateAdminBody();
    } else if($fileName == "/juego/acercaDe.php"){
      $this->generateAdminBody();
    } else if($fileName == "eventos/aniversario.php"){
      $this->generateAdminBody();
    }else if($fileName == "eventos/halloween.php"){
      $this->generateAdminBody();
    }else if($fileName == "eventos/añolunar.php"){
      $this->generateAdminBody();
    }else if($fileName == "eventos/navidad.php"){
      $this->generateAdminBody();
    }else if($fileName == "eventos/archivos.php"){
      $this->generateAdminBody();
    } else if($fileName == "juego/acercaDe.php"){
      $this->generateAdminBody();
    } else if($fileName == "juego/mapas.php"){
      $this->generateAdminBody();
    }

  }

  function generateBody(){
    echo '<body style="background: linear-gradient(#212121, #212121);
    width: 100vw;
    height: 100vh;">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div id="main_container" class="col s12">';
    include './views/' . $this->fileName;
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
  }

  function generateAdminBody() {
    echo '<body style="background-color: #EEEEEE;">';
    echo '<header>';
    include './views/navbar.php';
    echo '</header>';
    echo '<main style="background-color: #EEEEEE; ">';
    echo '<div class="container">';
    echo '<div id="main_container" class="col s12">';
    include './views/' . $this->fileName;
    echo '</div>';
    echo '</div>';
    echo '</main>';
    include './views/footer.php';
    echo '</body>';
    echo '</html>';
  }

  # 2. Crear método con nombre loadNombreDeVista
    // Asignar el título del encabezado
    // Asignar el nombre de la vista

  function loadLogin(){
    $this->head->setTitle("Inicio de sesión");
    $this->setFileName("login.php");
  }

  function loadHome(){
    $this->head->setTitle("Dashboard");
    $this->setFileName("home.php");
  }

  function loadHeroes(){
    $this->head->setTitle("Lista de Heroes");
    $this->setFileName("heroes.php");
  }

  function loadAcercaDe(){
    $this->head->setTitle("juego");
    $this->setFileName("/juego/acercaDe.php");
  }

  function loadMapas(){
    $this->head->setTitle("juego");
    $this->setFileName("juego/mapas.php");
  }

  function loadAniversario(){
    $this->head->setTitle("eventos");
    $this->setFileName("eventos/aniversario.php");
  }
  function loadLunar(){
    $this->head->setTitle("eventos");
    $this->setFileName("eventos/añolunar.php");
  }
  function loadArchivos(){
    $this->head->setTitle("eventos");
    $this->setFileName("eventos/archivos.php");
  }
  function loadHalloween(){
    $this->head->setTitle("eventos");
    $this->setFileName("eventos/halloween.php");
  }
  function loadNavidad(){
    $this->head->setTitle("eventos");
    $this->setFileName("eventos/navidad.php");
  }

  

}
?>
