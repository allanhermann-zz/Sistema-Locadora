<html>
<head><title>Removendo Usuário...</title>
<meta http-equiv = "refresh" content = "3; url = ../index.php" /></head>
<meta charset="utf-8">
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
<body bgcolor="#EEE8AA"><div class="content">
<?php
$connect = pg_connect("host=localhost port=5432 dbname=locadora user=postgres password=admin") or die(pg_error());

$ident = $_POST['id'];

$sql = pg_query($connect, "DELETE FROM cliente WHERE cliente.id = '$ident'");
pg_close($connect);
?>
<p> Usuário removido do sistema. Redirecionando para o inicio em 3 segundos </p>
</div>
</body>
</html>