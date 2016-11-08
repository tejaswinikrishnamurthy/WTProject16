
<html>
<head>
<?php
session_start();
extract($_SESSION);
extract($_POST);
			$s=$_POST['fe'];
			$_SESSION["feed"]=$s;
			$name=$_SESSION['name'];
			$ids=$_SESSION['id1'];
			$link=mysqli_connect("localhost","root","","game");
			$sql="UPDATE score_game SET Feedback='$s' WHERE Serial='$ids'";
			$ret=mysqli_query($link,$sql);
?>
<script>
<!--
function init()
{
	
	window.location="thank.php";
}
		-->	</script>
</head>
<body onload="init()">
</body>
</html>