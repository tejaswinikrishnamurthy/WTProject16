<html>
<body style="background-color:yellow">
<script>
<!--
	function back()
	{
		
		window.location="WTproject2.php";
	}
	-->
</script>
<?php
session_start();
 extract($_SESSION);
$link=mysqli_connect("localhost","root","","game");

$sql="SELECT * FROM score_game";
$ret=mysqli_query($link,$sql);

$rows = mysqli_num_rows($ret);
if($rows<6)
{
	$sql="SELECT * FROM score_game ORDER BY Score DESC";
	$ret=mysqli_query($link,$sql);
	echo "<center>";
	
	echo "<p style='position:absolute;top:100px;left:600px;font-size:2em;font-style:serif;color:red;'>";
	echo "HIGHSCORE:<br/>";
	echo "<p style='position:absolute;top:150px;left:610px;font-size:2em;font-style:serif;color:blue'>";
	while($row=mysqli_fetch_assoc($ret))
		echo $row["Name"]."  : ".$row["Score"]." </br>";
	echo " </p></p>"."</center>";
	
}
else
{
	$sql="SELECT * FROM score_game ORDER BY Score DESC LIMIT 5 ";
	$ret=mysqli_query($link,$sql);
	echo "<center>";
	
	echo "<p style='position:absolute;top:100px;left:600px;font-size:2em;font-style:serif;color:red'>";
	echo "HIGHSCORE:<br/>";
	echo "<p style='position:absolute;top:150px;left:610px;font-size:2em;font-style:serif;color:blue'>";
	while($row=mysqli_fetch_assoc($ret))
		echo $row["Name"]."  : ".$row["Score"]." </br>";
	echo " </p></p>"."</center>";
	
}
	echo "<center>";
	echo "<button type='button' style='position:absolute;top:500px;left:630px;background-color:red;font-size:2.5em;font-weight:900;font-family:serif'  onclick='back()'>BACK</button>";
	echo "</center>";
	
	?>
	</body>
	</html>
	