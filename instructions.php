<?php
session_start();
?>

<html>
	<head>
	<?php
	session_start();
	?>
	<style>
			<!--
				body{background-image:url('IMG_0436 (2).PNG');}	
			-->

		</style>
		<body>
			<p>
			  <h2> The game has the following mechanics</h2>
			<ul>
			  <h3> 
			   <li> A small paddle is controlled by the player and can only move within the bounds of the screen; either left or right.</li>
			   <li> The ball tracels across the screen and each collision results in the ball changing its direction based on on where it hit;this applies to the screen bounds, the bricks and the paddle.</li>
			   <li> If the ball reaches the bottom edge of the screen, the player is either game over or loses a life.</li>
			   <li> As soon as a brick touches the ball, it is destroyed,</li>
			   <li> The player wins as soon as all the bricks are destroye.</li>
			   <li> The direction of the ball can be manipulated by how far the ball bounces from the paddle's center.</li>
			  <h3>
			  </br></br></br>
			  <h3> Use right arrow key (->) to move the paddle right.
			  </br></br>
				   Use left arrow key (<-) to move the paddle left.</h3>
			<ul>
			   </p>
			    <center>
			<a href ="WTproject2.php"><img width="20%" height="10%" src="IMG_0429.PNG"/></a>
				</center>
			   
		</body>
		<marquee behavior="alternate" direction="left"><h1>2D breakout game</h1></marquee>
	</head>
</html>