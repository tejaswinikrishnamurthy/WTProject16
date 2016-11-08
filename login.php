
<html>
<head>
<?php
$link=mysqli_connect("localhost","root","","game");
session_start();
extract($_POST);
$_SESSION["name"]=$_POST["player"];
$name=$_SESSION["name"];


$sql="insert into score_game(Name,Score,Feedback) values('$name',0,'-')";
$ret=mysqli_query($link,$sql);

$sql="SELECT * FROM score_game";
$ret=mysqli_query($link,$sql);
//$val=mysqli_fetch_field($ret);
$rows = mysqli_num_rows($ret);
for($i=0;$i<$rows;$i++)
{	
	$row=mysqli_fetch_row($ret);
	if($i==($rows-1))
	{$_SESSION["id1"]=$row[0];
	$_SESSION["sco"]=$row[2];}
	//echo $row[0];}
	
}

?>

<script>
<!--
function init()
{
	
	window.location="WTproject2.php";
}
		-->	</script>
</head>
<body onload="init()">
</body>
</html>