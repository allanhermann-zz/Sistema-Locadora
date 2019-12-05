<html>
<head><title>Locação de Filmes</title>
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
  width: 100px;
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
<body bgcolor="#EEE8AA">
<div class="content"><?php

$connect = pg_connect("host=localhost port=5432 dbname=locadora user=postgres password=admin") or die(pg_error());

$filme = $_POST['nome'];
$cliente = $_POST['cliente'];

$sql = pg_query($connect, "SELECT * FROM dvd WHERE nome = '$filme'");

$sqlblu = pg_query($connect, "SELECT * FROM bluray WHERE nome = '$filme'");
	
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
echo "Quantidade em Estoque: <b>".$row[6]."</b><br><br><br>";  

	echo "<form name='const' method='post' action='confirmloca.php'>
	<input type='hidden' name='nome' value='".$row[1]."' >
	<input type='hidden' name='cliente' value='".$cliente."' >
	Digite a quantidade (verifique o estoque): <input type='text' name='qtdd' /><br />
	Selecione a quantidade de dias: 
	<select name='dia'>
	<option value='Um'>Um dia</option>
	<option value='Dois'>Dois dias</option>
  	<option value='Três'>Três dias</option>
  	<option value='Quatro'>Quatro dias</option>
	<option value='Cinco'>Cinco dias</option>
  	<option value='Seis'>Seis dias</option>
  	<option value='Sete'>Sete dias</option>
	</select>
	<input type='submit' value='Enviar' /><br />
	</form>"

?>
</div></body>
</html>