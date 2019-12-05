<html>
<head><title>Selecionando Cliente</title>
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
	width:300px;
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
<b2>Digite as informações:</b2><br /><br />
	<form name="usuario" method="post" action="consultauser.php">
		Nome Completo do Usuário:<br> <input type="text" name="cliente" /><br /><br />
		<input type="submit" value="Selecionar Cliente" class="button" /><br />
	</form>
<b2>ou</b2><br /><br />
	<form name="tabela" method="post" action="fulltable.php">
	<input type="hidden" name="locacoes" />
	<input type="submit" value="Consultar tabela Completa de locações" class="button" /><br /><br />
	</form>

</div></body>
</html>