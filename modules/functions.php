<?php include '../admin/config.php'; ?>
<?php 
	function session_checker(){
		if (!isset($_SESSION['usuario_id'])) {
			header("Location:formulario_login.html");
				exit();
		}
	}
	?>


<!--/*********************************************************************************************************/-->

<?php 
	
	function get_pacientes(){
	$sql = mysql_query("SELECT * FROM paciente");
	
	$contar = mysql_num_rows($sql);
	
	if ($contar <='0'){
		echo "<p>Pacientes não encontrados! Tente novamente mais tarde!</p>";
	}else {
		while ($rs = mysql_fetch_array ($sql)){
			$nome = $rs['0'];
			$sobrenome = $rs['1'];
			$rg = $rs['2'];
			$cpf= $rs['3'];
			$dn = $rs['4'];
			$endereco= $rs['5'];
			$tps = $rs['6'];
?>

<tr>
		<td><?php echo $nome; ?></td>
	<td><?php echo $sobrenome; ?></td>
	<td><?php echo $rg; ?></td>
	<td><?php echo $cpf; ?></td>
	<td><?php echo $dn; ?></td>
	<td><?php echo $endereco; ?></td>
	<td><?php echo $tps; ?></td>

</tr>
<?php
		}
	}
}
?>





<!--/*********************************************************************************************************/-->

<?php 
	
	function get_medicamentos(){
	$sql = mysql_query("SELECT * FROM medicamento");
	
	$contar = mysql_num_rows($sql);
	
	if ($contar <='0'){
		echo "<p>Pacientes não encontrados! Tente novamente mais tarde!</p>";
	}else {
		while ($rs = mysql_fetch_array ($sql)){
			$id = $rs['0'];
			$nome = $rs['1'];
			$descricao = $rs['2'];
			$dv= $rs['3'];
			$df = $rs['4'];
			$modusa= $rs['5'];
			$precaucoes = $rs['6'];
			$tarja = $rs['7'];
?>


	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $nome; ?></td>
		<td><?php echo $descricao; ?></td>
		<td><?php echo $dv; ?></td>
		<td><?php echo $df; ?></td>
		<td><?php echo $modusa; ?></td>
		<td><?php echo $tarja; ?></td>
	</tr>

  
  


<?php
		}
	}
}
?>