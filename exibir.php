<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <title>SGMED</title>

  <link rel="stylesheet" type="text/css" href="css/foundation.css">
  <link rel="stylesheet" type="text/css" href="css/foundation.min.css">
  <link rel="stylesheet" type="text/css" href="css/app.css">
  <link rel="icon" type="image/png" href="img/favicon.ico"/>
    
</head>
<body>


<div class="top-bar">
  <div class="top-bar-title">
    <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
      
    </span>
    <strong>SGMED</strong>
  </div>
  <div id="responsive-menu">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        
        <li><a href="modules/cad_medicamento.html">Medicamentos</a></li>
        <li><a href="modules/cad_paciente.html">Pacientes</a></li>
        <li><a href="modules/relatorioMedicamento.php">Relatorios Medicamentos</a></li>
        <li><a href="modules/relatorioPacientes.php">Relatorios Pacientes</a></li>
        <li><a href="cadastro.html">Usuarios</a></li>
      </ul>
    </div>
    <div class="top-bar-right">
      <ul class="menu">
        <li><input type="search" placeholder="Pesquisar"></li>
        <li><button type="button" class="button">Pesquisar</button></li>
      </ul>
    </div>
  </div>
</div>

<?php
    $login_cookie = $_COOKIE['login'];
        if(isset($login_cookie)){
            echo"Bem-Vindo, $login_cookie <br>";
            $data = date("d-m-Y h:i:s");
            echo"Hoje são ";
            echo " ";
            echo $data;
        }else{
            echo"Bem-Vindo, convidado <br>";
            echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
            echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
        }
?>

    <div class="row">
        <div class="small-12 medium-12 large-12 columns">

            <h1 id="acesso">SGMED</h1>
            <h4 id="descricao">Sistema de Gerenciamento de Medicamentos para a Prefeitura de Gilbués - PI</h4>
            <img src="img/pref.png" class="imgprinncipal" align="center">



        </div>
    </div>


</body>
</html>
