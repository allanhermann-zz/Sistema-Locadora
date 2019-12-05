<html>
<head><title>Confirmação de Locação</title>
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
	text-align:justify;
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
<body bgcolor="#EEE8AA"><div class="content">
<?php

$filme = $_POST['nome'];
$qtdd = $_POST['qtdd'];
$tempo = $_POST['dia'];
$cliente = $_POST['cliente'];
$dt = date("Y-m-d");

echo $filme."<br><br>".$qtdd." unidades.<br><br>".$tempo." dia(s).<br><br>";

if($tempo=="Um"):
	$d = "1";
endif;

if($tempo=="Dois"):
	$d = "2";
endif;

if($tempo=="Três"):
	$d = "3";
endif;

if($tempo=="Quatro"):
	$d = "4";
endif;

if($tempo=="Cinco"):
	$d = "5";
endif;

if($tempo=="Seis"):
	$d = "6";
endif;

if($tempo=="Sete"):
	$d = "7";
endif;

	$valor = ($qtdd * 3.50 * $d);

	$dtf = date( "Y-m-d", strtotime( "$dt +$d day" ) );

	echo "Data de devolução: ".$dtf."<br><br><br>";
	echo "<b>R$".$valor."</b>";

	echo "<br><form name='const' method='post' action='realizaloc.php'>
	<input type='hidden' name='nome' value='".$filme."' >
	<input type='hidden' name='qtdd' value='".$qtdd."' >
	<input type='hidden' name='valor' value='".$valor."' >
	<input type='hidden' name='data' value='".$dt."' >
	<input type='hidden' name='dataf' value='".$dtf."' >
	<input type='hidden' name='cliente' value='".$cliente."' >
	<input type='submit' value='Confirmar' class='button'/><br />
	</form>";

?></div>
</body>
</html>