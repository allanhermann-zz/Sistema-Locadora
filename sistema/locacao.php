<html>
<head><title>Locação de Filmes</title>
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

$cliente = $_POST['cliente'];

	echo "<form name='const' method='post' action='locf.php'>
		Digite o nome do Filme a ser locado: <input type='text' name='nome' /><br />
		<input type='hidden' name='cliente' value='".$cliente."' ><br>
		<input type='submit' value='Enviar' class='button'/><br />
		</form>"
?>
</body>
</html>