<html>
	<head>
	<?php
	session_start();
	?>
		<style>
		<!--
			.btn1{background-color:brown;font-size:1.5em;font-weight:900;font-family:serif;position:relative;}
			 canvas{ background: url(imagess.jpg); display: block; margin: 0 auto; }
		-->
		</style>
		<script>
		<!--
		
			var brc=4;
			var bcc=12;
			var bw=70;
			var bh=20;
			var bofl=30;
			var boft=30;
			var bp=10;
			var colors=["blue","red","orange","green","brown"];
			var rightkeyp=false;
			var leftkeyp=false;
			var ra=15;	
			var lives=3;
			var score=0;
		
			var bricks=[];
			function brickinti()
			{
				txt=document.querySelector("#txt1");
				f=document.querySelector("#jsform");
				cp=document.querySelector("#mycanvas");
				ctx=cp.getContext("2d");
				paddlex=(cp.width-150)/2;
				paddley=(cp.height-20);
				y=cp.height-ra-20;
				x=cp.width/2;
				for(var c=0;c<bcc;c++)
					{
						bricks[c]=[];
						for(var r=0;r<brc;r++)
							bricks[c][r]={x:0,y:0,status:1};
					}
				brick();
			}
		
			
		
			function brick()
			{
		
				for(c=0;c<bcc;c++)
				{
					for(r=0;r<brc;r++)
					{
						if(bricks[c][r].status==1)
						{
							brickX = (c*(bw+bp))+bofl;
							brickY = (r*(bh+bp))+boft;
							bricks[c][r].x = brickX;
							bricks[c][r].y = brickY;
							ctx.beginPath();
							ctx.rect(brickX,brickY,bw,bh);
							ctx.fillStyle = colors[r];;
							ctx.fill();
							ctx.closePath();
						}
					}
				}
			}
		
		
			document.addEventListener("keydown",kdh,false);
			document.addEventListener("keyup",kup,false);
		
		
			function paddle()
			{
			
				ctx.beginPath();
				ctx.rect(paddlex,paddley,150,22);
				ctx.fillStyle="black";
				ctx.fill();
				ctx.closePath();
		    
			}
			
			function ball()
			{
			
				ctx.beginPath();
				ctx.arc(x,y,ra,0,2*Math.PI);
				ctx.fillStyle="black";
				ctx.fill();
				ctx.closePath();
			//	moveball();
				    
			}
			
			gravity=0.02;
			gravitySpeedX=0;
			gravitySpeedY=0;
			
			function moveball()
			{
				gravitySpeedX+=gravity;
				gravitySpeedY-=gravity;
				if(x+gravitySpeedX>cp.width-ra||x+gravitySpeedX<ra+bofl)
					gravitySpeedX=-gravitySpeedX;
				if(y+gravitySpeedY<ra)
					gravitySpeedY=-gravitySpeedY;
				else if(y+gravitySpeedY>cp.height-ra-20)
				{
					if(x>paddlex && x<paddlex+150)
					  gravitySpeedY=-gravitySpeedY;
					else 
					{
						if(lives!=1)
						{
								
								lives=lives-1;
								paddlex=(cp.width-150)/2;
								paddley=(cp.height-20);
								y=cp.height-ra-20;
								x=cp.width/2;
								//alert(lives+"  LEFT");
								gravitySpeedY=-gravitySpeedY;
							}
							
							else
							{
								clearInterval(t1);
								localStorage.setItem("score",String(score));
								alert("GAME OVER");
								alert("Your score is "+localStorage.score);
								txt.value=localStorage.score;
								localStorage.removeItem("score");
								f.submit();
								//window.location="leveldisplay.php";
								
							}
						
					}
				
				
				}
				
			
			
			}
		
			
			
			function collision()
			{
			
				for(c=0;c<bcc;c++)
				{
					for(r=0;r<brc;r++)
					{
						var b=bricks[c][r];
						if(b.status==1)
						{
							if(x>b.x && x<b.x+bw && y>b.y && y<b.y+bh)
								{gravitySpeedY=-gravitySpeedY;
								b.status=0;
								score=score+10;}
								
						}
			
					}
				}
			}
			
		
		
		
			function kdh(event)
			{
				if(event.keyCode==39)
					rightkeyp=true;
				else if(event.keyCode==37)
					leftkeyp=true;
				 
			}
			
			function displaysc()
			{
			
				s=document.getElementById("sc").innerHTML="SCORE:"+score;
				if(score==(brc*bcc*10))
				{
					clearInterval(t1);
					alert("WON THE GAME:)");
					localStorage.setItem("score",String(score));
					alert("Your score is "+localStorage.score);
					txt.value=localStorage.score;
					//f.submit();
					window.location="level2.php";
				
				}
				
				//w=document.createTextNode("SCORE:"+score);
				//s.replaceChild(w,s.chidNodes[0]);
			
			
			}
			function displive()
			{
				z=document.getElementById("liv").innerHTML="LIVES:"+lives;
			}
			
			
			function move()
			{
		
				ctx.clearRect(0,0,cp.width,cp.height);
				
				ball();
				brick();
				paddle();
				moveball();
				collision();
				displaysc();
				displive();
				if(rightkeyp && paddlex<cp.width-150)
					paddlex+=6;
				else if(leftkeyp && paddlex>0)
					paddlex=paddlex-6;
					
					
				x+=gravitySpeedX;
				y+=gravitySpeedY;
				
				
				
				
			

			}
		
			
			function kup(event)
			{
				if(event.keyCode==39)
					rightkeyp=false;
				else if(event.keyCode==37)
					leftkeyp=false;
				
			}
				 
			var t1=setInterval(move,10);
		
			function home()
			{
				if(localStorage.score)
					localStorage.removeItem("score");
				window.location="leveldisplay.php";
			}		
		
		
		
			 
		 
		   -->
		  </script>
	</head>
	<body onload="brickinti()" ><center>
		<canvas id="mycanvas" width="1000" height="500" style="border:1px solid black">
		</canvas></center>
		<center>
		<br/>
		<br/>
		<br/>
		<br/>
		<span id="liv" style="font-family:serif;font-size:1.5em"> LIVES:3</span>
	  	<button type="button" class="btn1" onclick="home()">HOME</button>
		<span style="font-family:serif;font-size:1.5em" id="sc">SCORE:0</span>
		
		</center>
		<form action="score.php" id="jsform" method="post" >
		<input type="text" id="txt1"  name="sco1" value=""/>
		</form>
	 
	 
	 </body>
	 </html>