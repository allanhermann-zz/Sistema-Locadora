<html>
<head>
<meta charset="utf-8">
<title> Altere as informações</title>
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

.button {
	width:150px;
	text-align:center;
	background-color: white;
	color: black;
	border: 2px solid green;
	transition-duration: 0.4s;
	border-radius: 6px;
	cursor:pointer;
}

.button:hover{
	background-color: lightgray; 
	color: black;
}

input[type=text] {
  width: 100%;
  padding: 8px 20px;
  margin: 2px 0px;
  box-sizing: border-box;
  border: 2px solid green;
  border-radius: 6px;
  background-color: #EEE8AA;
  color: black;
}

input[type=text]:focus {
  border: 3px solid black;
  border-radius:6px;
}

</style>


</head>
<body bgcolor="#EEE8AA"><div class="content">
<?php
$connect = pg_connect("host=localhost port=5432 dbname=locadora user=postgres password=admin") or die(pg_error());

$nome = $_GET['alt'];

$sql = pg_query($connect, "SELECT * FROM dvd WHERE nome = '$nome'");

$sqlblu = pg_query($connect, "SELECT * FROM bluray WHERE nome = '$nome'");

if(pg_num_rows($sql)==0){
	$row = pg_fetch_row($sqlblu);
	echo "<form name='cliente' method='post' action='confirmedicbluray.php'>
	<input type='hidden' name='ident' value='$row[0]'/ >
	Nome do Filme: <input type='text' name='nome' value='$row[1]'/><br /><br />
	Sinopse:<input type='text' name='sinopse' value='$row[4]'/><br /><br />
	Categorias:<input type='text' name='categoria' value='$row[2]'/><br /><br />
	Diretor(es):<input type='text' name='diretor' value='$row[3]'/><br /><br />
	Ator(es):<input type='text' name='ator' value='$row[5]'/><br /><br />
	Quantidade em Estoque:<input type='text' name='estoque' value='$row[6]'/><br /><br />
	<input type='submit' value='Confirmar Edição' class='button'/>
	</form>";
} else {
	$row = pg_fetch_row($sql);
	echo "<form name='cliente' method='post' action='confirmedicdvd.php'>
	<input type='hidden' name='ident' value='$row[0]'/ >
	Nome do Filme: <input type='text' name='nome' value='$row[1]'/><br /><br />
	Sinopse:<input type='text' name='sinopse' value='$row[4]'/><br /><br />
	Categorias:<input type='text' name='categoria' value='$row[2]'/><br /><br />
	Diretor(es):<input type='text' name='diretor' value='$row[3]'/><br /><br />
	Ator(es):<input type='text' name='ator' value='$row[5]'/><br /><br />
	Quantidade em Estoque:<input type='text' name='estoque' value='$row[6]'/><br /><br />
	<input type='submit' value='Confirmar Edição' class='button'/>
	</form>";
}
	
pg_close($connect);
?></div>
</body>