<html>
<head><title>Locado por cliente</title>
<meta charset="utf-8">

<style>
.content {
	margin: auto;
	width:30%;
	border: 3px solid green;
	padding-top: 30px;
	padding-bottom: 30px;
	padding-left: 70px;
	padding-right: 30px;
	background:lightgreen;
	text-align:justify;
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
	float:right;
	margin-right:70px;
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

$nome = $_POST['cliente'];

$connect = pg_connect("host=localhost port=5432 dbname=locadora user=postgres password=admin") or die(pg_error());

$sql = pg_query($connect, "SELECT * FROM cliente WHERE nome = '$nome'");

	$rowl = pg_fetch_row($sql);
	$userID = $rowl[0];

	$sqlid = pg_query($connect, "SELECT * FROM cliente_dvd_bluray WHERE cliente_fkey = '$userID'");
	$number = pg_num_rows($sqlid);
	
	$counter = 0;

while($counter<$number){	

	$rowl = pg_fetch_row($sqlid);

	$bluid = $rowl[0];
	$dvdid = $rowl[2]; 
	$datadev = $rowl[4];
	$qtdd = $rowl[5];

	echo "<br>Nome do Cliente: ".$nome;

	if($bluid==null){
		$sqldvd = pg_query($connect, "SELECT * FROM dvd WHERE id = '$dvdid'");
		$rowl = pg_fetch_row($sqldvd);
	 	echo "<br>DVD: ".$rowl[1]."<br>Data de devolução: ".$datadev."<br>Quantidade desse filme locadas: ".$qtdd;
		echo "<form name='const' method='post' action='devolucaodvd.php'>
		<input type='hidden' name='filme' value='$dvdid'/><br />
		<input type='hidden' name='nome' value='$userID'/><br />
		<input type='hidden' name='qtdd' value='$qtdd'/><br />
		<input type='submit' value='Devolver DVD' class='button'/><br />
		</form>";
	}

	if($dvdid==null){
		$sqlblu = pg_query($connect, "SELECT * FROM bluray WHERE id = '$bluid'");
		$rowl = pg_fetch_row($sqlblu);
	 	echo "<br>Blu-ray: ".$rowl[1]."<br>Data de devolução: ".$datadev."<br>Quantidade desse filme locadas: ".$qtdd;
		echo "<form name='const' method='post' action='devolucaoblu.php'>
		<input type='hidden' name='filme' value='$bluid'/><br />
		<input type='hidden' name='nome' value='$userID'/><br />
		<input type='hidden' name='qtdd' value='$qtdd'/><br />
		<input type='submit' value='Devolver Blu-ray' class='button'/><br />
		</form>";
	}
$counter = $counter + 1;
}

?>
</div></body>
</html>