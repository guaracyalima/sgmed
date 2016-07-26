<?php include 'functions.php' ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Reservas</title>

	<link rel="stylesheet" type="text/css" href="../css/foundation.css">
	<link rel="stylesheet" type="text/css" href="../css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<link rel="icon" type="image/png" href="../img/favicon.ico"/>
	
</head>
<body>

	<div class="row">
		<div class="small-12 medium-12 large-12 columns ">


			<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Sobrenome</th>
      <th>RG</th>
      <th>CPF</th>
      <th>Data de nascimento</th>
      <th>Endereço</th>
      <th>Pressão</th>
      
    </tr>
  </thead>
			<?php 
			get_pacientes();
			 ?>

			 </tbody>
</table>	
			<a href="../index.php">Voltar</a>	
			
			<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
		
		</div>
	</div>
	
</body>

</html>