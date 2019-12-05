<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv = "refresh" content = "3; url = ../index.php" />
	<title>Devolvendo Locação</title>

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
	$filmeID = $_POST['filme'];
	$userID = $_POST['nome'];
	$qtdd = $_POST['qtdd'];

	$action = pg_query($connect,"UPDATE dvd SET estoque = (estoque+'$qtdd') WHERE id = '$filmeID'");
	$action = pg_query($connect,"DELETE FROM cliente_dvd_bluray WHERE cliente_fkey = '$userID' AND dvd_fkey = '$filmeID'");
	
	pg_close($connect);

?>

	<p> Filme devolvido. Redirecionando para o inicio em 3 segundos </p>

</div></body>

</html>