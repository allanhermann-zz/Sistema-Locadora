<html>
<head>
<meta charset="utf-8">
<title> Pagina Inicial </title>

<style>
.content {
	margin: auto;
	width:10%;
	border: 3px solid green;
	padding-top: 40px;
	padding-bottom: 40px;
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

</style>
</head>
<div class="content">
<body bgcolor="#EEE8AA">
<b2>Usuarios:</b2><br /><br />
	<form action="clientes/cadclientes.php">
		<input type="submit" class="button" value="Cadastrar Usuário" /><br />
	</form>
	<form action="clientes/conclientes.php">
		<input type="submit" class="button" value="Consultar Usuário" /><br />
	</form>

<br /><br /><br />

<b2>Filmes:</b2><br /><br />
	<form action="filmes/cadfilmes.php">
		<input type="submit" class="button" value="Cadastrar Filme" /><br />
	</form>
	<form action="filmes/confilme.php">
		<input type="submit" class="button" value="Consultar Filme" /><br />
	</form>

<br /><br /><br />

<b2>Sistema:</b2><br /><br />
	<form action="sistema/seleccliente.php">
		<input type="submit" class="button" value="Locação de Filme" /><br />
	</form>
	<form action="sistema/statusloc.php">
		<input type="submit" class="button" value="Consultar Locações" /><br />
	</form>
</div>
</body>

</html>