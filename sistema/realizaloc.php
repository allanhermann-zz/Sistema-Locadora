<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv = "refresh" content = "3; url = ../index.php" />
	<title>Confirmando Locação</title>

<style>
.content {
	margin: auto;
	width:30%;
	border: 3px solid green;
	padding-top: 30px;
	padding-bottom: 30px;
	padding-left: 70px;
	padding-right: 90px;
	background:lightgreen;
	text-align:center;
	font-family: "Lucida Console", "Arial";
	border-radius: 6px;
}
</style>


</head>

<body bgcolor="#EEE8AA">

<div class="content"><?php

	$connect = pg_connect("host=localhost port=5432 dbname=locadora user=postgres password=admin") or die(pg_error());

	$nome = $_POST['nome'];
	$qtdd = $_POST['qtdd'];
	$valor = $_POST['valor'];
	$data = $_POST['data'];
	$dataf = $_POST['dataf'];
	$clientenome = $_POST['cliente'];

	$sql = pg_query($connect, "SELECT * FROM dvd WHERE nome = '$nome'");

	if(pg_num_rows($sql)==0){
		$sql = pg_query($connect, "SELECT * FROM bluray WHERE nome = '$nome'");
		$row = pg_fetch_row($sql);
		$type = "bluray";
		$filmeID = $row[0];
	} else {
		$row = pg_fetch_row($sql);
		$type = "dvd";
		$filmeID = $row[0];
	}

	$sql = pg_query($connect, "SELECT id FROM cliente WHERE nome = '$clientenome'");
	$row = pg_fetch_row($sql);
	$clienteID = $row[0];	

	if($type == "bluray"){
		$action = pg_query($connect, "INSERT INTO cliente_dvd_bluray (bluray_fkey,cliente_fkey,entrega,devolucao,quantidade,valor,dvd_fkey) VALUES ('$filmeID','$clienteID','$data','$dataf','$qtdd','$valor',null)");
		$action = pg_query($connect, "UPDATE bluray SET estoque = (estoque-'$qtdd') WHERE id = '$filmeID'");
	}
	if($type == "dvd"){
		$action = pg_query($connect, "INSERT INTO cliente_dvd_bluray (dvd_fkey,cliente_fkey,entrega,devolucao,quantidade,valor,bluray_fkey) VALUES ('$filmeID','$clienteID','$data','$dataf','$qtdd','$valor',null)");
		$action = pg_query($connect, "UPDATE dvd SET estoque = (estoque-'$qtdd') WHERE id = '$filmeID'");
	}

	pg_close($connect);

?>

	<p> Filme locado. Redirecionando para o inicio em 3 segundos </p>

</div></body>

</html>