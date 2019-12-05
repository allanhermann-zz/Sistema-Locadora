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
	<form name="consulta" method="post" action="locacao.php">
		Nome Completo do Usuário: <input type="text" name="cliente" /><br /><br />
		<input type="submit" value="Selecionar Cliente" class="button"><br /><br />
	</form>
</div></body>
</html>