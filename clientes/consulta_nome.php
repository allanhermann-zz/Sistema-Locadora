<html>
<head><title> Consulta de Clientes</title>
<style>
.content {
	margin: auto;
	width:30%;
	border: 3px solid green;
	padding-top: 50px;
	padding-bottom: 50px;
	padding-left: 110px;
	padding-right: -30px;
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
	float:left;
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
<meta charset="utf-8">
</head>
<body bgcolor="#EEE8AA">
<div class="content"><?php
$connect = pg_connect("host=localhost port=5432 dbname=locadora user=postgres password=admin") or die(pg_error());

$nome = $_POST['nome'];

$sql = pg_query($connect, "SELECT * FROM cliente WHERE nome = '$nome'");
	$row = pg_fetch_row($sql);
	$id = $row[0];
		echo "ID: ".$row[0]."<br>";
		echo "Nome: ".$row[1]."<br>";
		echo "Rua: ".$row[6]."<br>";
		echo "Cidade: ".$row[5]."<br>";
		echo "Estado: ".$row[4]."<br>";
		echo "CEP: ".$row[7]."<br>";
		echo "Data de Nascimento: ".$row[3]."<br>";
		echo "CPF: ".$row[2]."<br>";

	echo "<br>
<form name='remover' method='post' action='remclientes.php' />
<input type='hidden' name='id' value='$id' />
<input type='submit' value='Remover Usuário' class='button'/> 
</form >
		&nbsp&nbsp
<form name='alterar' method='post' action='altclientes.php' />
<input type='hidden' name='id' value='$id' />
<input type='submit' value='Modificar Dados' class='button'/>
</form>    
		&nbsp&nbsp
<form name='voltar' method='post' action='../index.php' />
<input type='submit' value='Voltar ao início' class='button'/>
</form>    ";

?>
</div>
</body>
</html>