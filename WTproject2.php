


<html>
	<head>
		<?php
			session_start();
		?>
		<style>
			<!--
				 body{background-image:url('Red-curtain-background-design-psd.jpg');
				 background-repeat:no-repeat;
				 background-size:1350px 650px;}	
				.btn1{background-color:brown;font-size:3em;font-weight:900;font-family:serif}
				.btn2{background-color:yellow;font-size:3em;font-weight:900;font-family:serif}
				.btn3{background-color:pink;font-size:3em;font-weight:900;font-family:serif}
				.btn4{background-color:orange;font-size:3em;font-weight:900;font-family:serif}
				.btn5{background-color:red;font-size:3em;font-weight:900;font-family:serif}
			-->
			

		</style>
		<script>
		<!--
			function play()
			{
				window.location="leveldisplay.php";
			}
			
			function instructions()
			{
				window.location="instructions.php";
			}
			
			function video()
			{
				window.location="video.php";
			}
			
			function high()
			{
				
				window.location="highscore.php";
			}
			
			function quit()
			{
				//window.open("WTproject1.html");
				var a=confirm("DO YOU WANT TO REALLY QUIT?");
			    if(a==0)
					window.location="WTproject2.php";
				else
				    window.location="feedback.html";
			}
			
		-->
		</script>
			<body>
				<center>
				<br/>
				<br/>
				<br/>
				<button type="button" class="btn1" onclick="play()" >PLAY</button>
				<br/><br/>
				</center>
				<center>
				<br/><br/>
				<button type="button" class="btn2" onclick="instructions()" >INSTRUCTIONS	</button>
				<br/><br/>
				</center>
				<center>
				<br/><br/>
				<button type="button" class="btn3" onclick="video()">	TUTORIAL</button>
				<br/><br/>
				</center>
				<center>
				<br/><br/>
				<button type="button" class="btn4" onclick="high()">HIGHSCORE</button>
				
				<br/><br/>
				<center>
				<br/><br/>
				<button type="button" class="btn5" onclick="quit()">QUIT</button>
				
				<br/><br/><br/>
				</center>
			</body>
		</head>
	</html>