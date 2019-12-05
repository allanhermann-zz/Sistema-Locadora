<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Filmes</title>
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
	<form name="cliente" method="post" action="cadastro_filmes.php">
		Nome do Filme: <input type="text" name="nome" /><br /><br />
		Sinopse:<input type="text" name="sinopse" /><br /><br />
		Categorias:<input type="text" name="categorias" /><br /><br />
		Diretor:<input type="text" name="diretor" /><br /><br />
		Atores Principais:<input type="text" name="atores" /><br /><br />
		Quantidade em estoque:<input type="text" name="estoque" /><br /><br />
		Selecione o tipo de mídia:<br><input type="radio" name="midia" value="dvd"/> DVD
					  <input type="radio" name="midia" value="bluray"/> BLURAY<br /><br />
		<input type="submit" value="Cadastrar" class="button"/>
	</form>
</div></body>
</html>