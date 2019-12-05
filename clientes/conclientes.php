<html>
<head>
<meta charset="utf-8">
<title> Consulta de Usuários: </title>

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
	padding:10px;
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
<div class="content">

<b2>Digite as informações:</b2><br /><br />
	<form name="consulta" method="post" action="consulta_nome.php">
		Nome Completo do Usuário: <input type="text" name="nome" /><br /><br />
		<input type="submit" value="Consultar" class="button" /><br />
	</form>
<b2>ou</b2><br />
	<form name="consulta" method="post" action="consulta_cpf.php" /><br /><br />
		CPF do Usuário:<input type="text" name="cpf" /><br /><br />
		<input type="submit" value="Consultar" class="button" /><br /><br />
	</form>

</div>
</body>
</html>