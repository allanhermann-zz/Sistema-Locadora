<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Clientes</title>
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

<body bgcolor="#EEE8AA">
<div class ="content">
	<form name="cliente" method="post" action="cadastro_clientes.php" >
		Nome Completo: <input type="text" name="nome" /><br /><br />
		CPF:<input type="text" name="cpf" /><br /><br />
		CEP:<input type="text" name="cep" /><br /><br />
		Rua: <input type="text" name="rua" /><br /><br />
		Cidade:<input type="text" name="cidade" /><br /><br />
		Estado:<input type="text" name="estado" /><br /><br />
		Data de Nascimento:<input type="text" name="nascimento" /><br /><br />
		<input type="submit" class = "button" value="Cadastrar" />
	</form>
</div>
</body>


</html>