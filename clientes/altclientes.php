<html>
<head><title> Consulta de Clientes</title>
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

$ident = $_POST['id'];

$sql = pg_query($connect, "SELECT * FROM cliente WHERE id = '$ident'");
	while($row = pg_fetch_array($sql)) {


		echo "<form name='cliente' method='post' action='confirmedic.php'>
		<input type='hidden' name='ident' value='$row[0]'/ >
		Nome Completo: <input type='text' name='nome' value='$row[1]'/><br /><br />
		Rua: <input type='text' name='rua' value='$row[6]'/><br /><br />
		CEP:<input type='text' name='cep' value='$row[7]'/><br /><br />
		Cidade:<input type='text' name='cidade' value='$row[5]'/><br /><br />
		Estado:<input type='text' name='estado' value='$row[4]'/><br /><br />
		CPF:<input type='text' name='cpf' value='$row[2]'/><br /><br />
		<input type='submit' value='Confirmar Edição' class='button'/>
		</form>";
	
		}
	pg_close($connect);
?></div>
</body>
</html>