<?php include '../config.php' ?>
<?php
 
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$dv = $_POST['dv'];
$df = $_POST['df'];
$modusa = $_POST['modusa'];
$precaucoes = $_POST['precaucoes'];
$tarja = $_POST['tarja'];

$sql = mysql_query(
			"INSERT INTO medicamento (nome, descricao, dv, df, modusa, precaucoes, tarja) 
VALUES ('$nome', '$descricao', '$dv', '$df', '$modusa', '$precaucoes', '$tarja')")or die( mysql_error());
				echo "Medicamento cadastrado com sucesso!";
			if (!$sql) {
					echo "Erro ao cadastrar medicamento! Tente novamente mais tarde ou contate o admiministrador do siste.";
				}

?>				