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

$filme = $_POST['nome'];

$sql = pg_query($connect, "SELECT * FROM dvd WHERE nome like '%$filme%'");

$sqlblu = pg_query($connect, "SELECT * FROM bluray WHERE nome like '%$filme%'");
	
$row = pg_fetch_row($sql);

if(pg_num_rows($sql)==0):
	$row = pg_fetch_row($sqlblu);
endif;

echo "ID: ".$row[0]."<br><br>";
echo "Nome do Filme: ".$row[1]."<br><br>";
echo "Sinopse: ".$row[4]."<br><br>";
echo "Categorias: ".$row[2]."<br><br>";
echo "Diretor(es): ".$row[3]."<br><br>";
echo "Ator(es) Principais: ".$row[5]."<br><br>";
echo "Quantidade em Estoque: ".$row[6]."<br><br>";  

$id = $row[1];

echo "<a href='remfilme.php?del=$id' >Remover Filme</a>&nbsp&nbsp<a href='altfilme.php?alt=$id' >Alterar Filme</a>";
pg_close($connect);
?>
</div></body>
</html>