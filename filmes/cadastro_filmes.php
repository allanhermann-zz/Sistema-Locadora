<html>
<head><title> Cadastrando...</title>
<meta charset="utf-8">
<meta http-equiv = "refresh" content = "3; url = ../index.php" />
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

$tipo = $_POST['midia'];
$connect = pg_connect("host=localhost port=5432 dbname=locadora user=postgres password=admin") or die(pg_error());

$nome = $_POST['nome'];
$sinopse= $_POST['sinopse'];
$categoria= $_POST['categorias'];
$diretor= $_POST['diretor'];
$atores= $_POST['atores'];
$estoque= $_POST['estoque'];

if($tipo == 'dvd') :
	$sql = pg_query($connect, "INSERT INTO dvd(nome,sinopse,categoria,diretor,atores,estoque) VALUES ('$nome','$sinopse','$categoria','$diretor','$atores','$estoque')");
endif;
if($tipo == 'bluray') :
	$sql = pg_query($connect, "INSERT INTO bluray(nome,sinopse,categoria,diretor,atores,estoque) VALUES ('$nome','$sinopse','$categoria','$diretor','$atores','$estoque')");
endif;

pg_close($connect);
?>
<p> Redirecionando para o inicio em 3 segundos </p></div>
</body>