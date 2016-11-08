<html>
	<head>
		<?php
		session_start();
		?>
		<style>
		<!--
			.btn1{background-color:orange;font-size:3em;font-weight:900;font-family:serif}
				.btn2{background-color:yellow;font-size:3em;font-weight:900;font-family:serif}
				.btn3{background-color:pink;font-size:3em;font-weight:900;font-family:serif}
				 body{background-image:url('Red-curtain-background-design-psd.jpg');
				 background-repeat:no-repeat;
				 background-size:1350px 650px;}	
			-->
		</style>
		<script>
		<!--
			function level1()
			{
				window.location="play1.php";
				
			}
			function level2()
			{
				window.location="level2.php";
				
			}
			function home()
			{
				window.location="WTproject2.php";
			}
			-->
			</script>
			
	</head>
	<body>
				<center>
				<br/>
				<br/>
				<br/>
				<br/>
				<button type="button" class="btn1" onclick="level1()" >LEVEL 1</button>
				<br/><br/><br/>
				</center>
				<center>
				<br/><br/><br/>
				<button type="button" class="btn2" onclick="level2()" >LEVEL 2</button>
				<br/><br/><br/>
				</center>
				<center>
				<br/><br/>
				<center>
				<br/><br/>
				<button type="button" class="btn3" onclick="home()">HOME</button>
				
				<br/><br/><br/>
				</center>
		</body>
		</html>