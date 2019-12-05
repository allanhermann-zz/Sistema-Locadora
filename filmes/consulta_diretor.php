<html>
<head><title> Consulta de Filmes</title>
<meta charset="utf-8">

<style>
.content {
	margin: auto;
	width:50%;
	border: 3px solid green;
	padding-top: 30px;
	padding-bottom: 30px;
	padding-left: 70px;
	padding-right: 90px;
	background:lightgreen;
	text-align:left;
	font-family: "Lucida Console", "Arial";
	border-radius: 6px;
}

a:link, a:visited {
	text-decoration: none;
	font-family: "Arial";
	text-align:center;
	background-color: white;
	color: black;
	border: 2px solid green;
	transition-duration: 0.4s;
	border-radius: 6px;
	cursor:pointer;
	padding: 1px 6px;
	font-size: 13.333;
	float:right;
}

a:hover, a:active {
  background-color: lightgray;
}

</style>

</head>
<body bgcolor="#EEE8AA"><div class="content">
<?php
$connect = pg_connect("host=localhost port=5432 dbname=locadora user=postgres password=admin") or die(pg_error());
$diretor = $_POST['diretor'];
$movie = "nome";

$sqldvd = pg_query($connect, "SELECT nome FROM dvd WHERE diretor like '%$diretor%'");
$sqlbluray = pg_query($connect, "SELECT nome FROM bluray WHERE diretor like '%$diretor%'");


while($row = pg_fetch_array($sqldvd)){	
	echo $row[$movie]."<a href='remfilme.php?del=$row[$movie]' >Remover Filme</a>"."<a href='altfilme.php?alt=$row[$movie]'>Alterar dados do Filme</a><br><br>";
}
while($row = pg_fetch_array($sqlbluray)){
	echo $row[$movie]."<a href='remfilme.php?del=$row[$movie]' >Remover Filme</a>"."<a href='altfilme.php?alt=$row[$movie]'>Alterar dados do Filme</a><br><br>";
}

pg_close($connect);
?>
<h2>Caso deseje mais informações sobre um filme, copie o nome, volte e pesquise pelo nome completo.</h2>
</div></body>
</html>