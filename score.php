<html>
<head>
<?php
		session_start();
		extract($_SESSION);
		extract($_POST);
		if(isset($_SESSION['name']))
		{
			
			$s=$_POST['sco1'];
			//if($_SESSION["sco"]<$s)
			//{
			$_SESSION["sco"]=$s;
			$name=$_SESSION['name'];
			$ids=$_SESSION['id1'];
			$link=mysqli_connect("localhost","root","","game");
			$sql="UPDATE score_game SET score='$s' WHERE Serial='$ids'";
			$ret=mysqli_query($link,$sql);
			//}
			
					
		}	
			
				
		?>
		<script>
		<!--
	function init()
{
	
	window.location="leveldisplay.php";
}
		-->	</script>	
		<body onload="init()">
		</body>
		</html>