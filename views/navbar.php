<?php
$view = $_GET['view'];
?>

<ul id="juego" class="dropdown-content">
  <li><a href="?view=AcercaDe">Acerca De</a></li>
  <li><a href="?view=mapas">Mapas</a></li>
  <li class="divider"></li>
</ul>
<ul id="eventos" class="dropdown-content">
  <li><a href="?view=aniversario">Aniversario</a></li>
  <li><a href="?view=halloween">Terror de Halloween</a></li>
  <li><a href="?view=lunar">Año Nuevo Lunar</a></li>
  <li><a href="?view=navidad">Paraiso Invernal</a></li>
  <li><a href="?view=archivos">Arhivos</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="?view=home" class="brand-logo"><img width="60px" height="60px" src="./res/assets/images/overwatchlogo.png" class="img-thumbnail" alt="Cinque Terre"></a>
    <ul class="right hide-on-med-and-down">
      <li><a class="dropdown-trigger" href="#!" data-target="juego">Juego<i class="material-icons right">arrow_drop_down</i>
      <li><a href="?view=heroes">Heroes</a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="eventos">Eventos<i class="material-icons right">arrow_drop_down</i>

        </a></li>
    </ul>
  </div>
</nav>
<nav>
  <div class="nav-wrapper">
    <!-- Home -->
    <div class="col s12" id="breadcrumbHome" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
    </div>
    <!-- Acerca De -->
    <div class="col s12" id="breadcrumbAcercaDe" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a class="breadcrumb">Juego</a>
      <a href="?view=AcercaDe" class="breadcrumb">Acerca De</a>
    </div>
    <!-- Mapas -->
    <div class="col s12" id="breadcrumbMapas" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a class="breadcrumb">Juego</a>
      <a href="?view=mapas" class="breadcrumb">Mapas</a>
    </div>
    <!-- Heroes -->
    <div class="col s12" id="breadcrumbHeroes" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a href="?view=heroes" class="breadcrumb">Heroes</a>
    </div>
    <!-- Aniversario -->
    <div class="col s12" id="breadcrumbAniversario" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a class="breadcrumb">Eventos</a>
      <a href="?view=aniversario" class="breadcrumb">Aniversario</a>
    </div>
    <!-- Halloween -->
    <div class="col s12" id="breadcrumbHalloween" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a class="breadcrumb">Eventos</a>
      <a href="?view=halloween" class="breadcrumb">Terror de Halloween</a>
    </div>
    <!-- Año Nuevo -->
    <div class="col s12" id="breadcrumbAñoLunar" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a class="breadcrumb">Eventos</a>
      <a href="?view=lunar" class="breadcrumb">Año Nuevo Lunar</a>
    </div>
    <!-- Navidad -->
    <div class="col s12" id="breadcrumbNavidad" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a class="breadcrumb">Eventos</a>
      <a href="?view=navidad" class="breadcrumb">Paraiso Invernal</a>
    </div>
    <!-- Archivos -->
    <div class="col s12" id="breadcrumbArchivos" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a class="breadcrumb">Eventos</a>
      <a href="?view=archivos" class="breadcrumb">Archivos</a>
    </div>
  </div>
</nav>

<h5 class="hiddenView" id="<?php if ($view) echo $view ?>"></h5>
<script>
  $(".dropdown-trigger").dropdown();
</script>
<script src="./scripts/navbar.js?v1.0.0"></script>