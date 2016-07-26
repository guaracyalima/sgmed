<?php include '../config.php' ?>
<?php
 
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$dn = $_POST['dn'];
$endereco = $_POST['endereco'];
$tps = $_POST['tps'];

$sql = mysql_query(
			"INSERT INTO paciente (nome, sobrenome, rg, cpf, dn, endereco, tps) 
VALUES ('$nome', '$sobrenome', '$rg', '$cpf', '$dn', '$endereco', '$tps')")or die( mysql_error());
				echo "Paciente cadastrado com sucesso!";
			if (!$sql) {
					echo "Erro ao cadastrar paciete! Tente novamente mais tarde ou contate o admiministrador do siste.";
				}

?>				