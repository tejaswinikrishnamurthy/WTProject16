<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>level 2</title>
    <style>
    	* { padding: 0; margin: 0; }
    	canvas{ background: url(images.jpg); display: block; margin: 0 auto; }
         .btn1{background-color:brown;font-size:1.5em;font-weight:900;font-family:serif;position:relative;}
</style>
<?php
session_start();
?>
</head>
<body>

<canvas id="myCanvas" width="1100" height="600"></canvas>
<center><button type="button" class="btn1" onclick="home()">BACK</button>
<form action="score.php" id="jsform" method="post" >
		<input type="hidden" id="txt1"  name="sco1" value=""/>
		</form>
</center>


<script>
 var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");

txt=document.querySelector("#txt1");
f=document.querySelector("#jsform");
var ballRadius = 12;
var x = canvas.width/2;
var y = canvas.height-30;
var dx = 2;
var dy = -2;
var paddleHeight = 20;
var paddleWidth = 150;
var paddleX = (canvas.width-paddleWidth)/2;
var rightPressed = false;
var leftPressed = false;
var brickRowCount = 6;
var brickColumnCount = 12;
var brickWidth = 75;
var brickHeight = 20;
var brickPadding = 10;
var brickOffsetTop = 30;
var brickOffsetLeft = 30;
var score=0;
var lives = 3;
var bricks = [];
    for(c=0; c<brickColumnCount ; c++){
              bricks [c]=[];
  r=0;
   if(c<brickRowCount)
  {
            
        while(r<brickRowCount-c)
         { 
        bricks[c][r]={ x: 0, y: 0 , status: 1 };  
                     r++;  
         }
    }
   else
     {
        
       while(r<=c-brickRowCount)
          {
          bricks[c][r]={ x: 0 ,y: 0 , status: 1 };
           r++;
         }
    }   
}                                          


document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);

function keyDownHandler(e) {
    if(e.keyCode == 39) {
        rightPressed = true;
    }
    else if(e.keyCode == 37) {
        leftPressed = true;
    }
}
function keyUpHandler(e) {
    if(e.keyCode == 39) {
        rightPressed = false;
    }
    else if(e.keyCode == 37) {
        leftPressed = false;
    }
}

function drawBall() {
    ctx.beginPath();
    ctx.arc(x, y, ballRadius, 0, Math.PI*2);
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.closePath();
}
function drawPaddle() {
    ctx.beginPath();
    ctx.rect(paddleX, canvas.height-paddleHeight, paddleWidth, paddleHeight);
    ctx.fillStyle = "orange";
    ctx.fill();
    ctx.closePath();
}
function drawBricks() {
    for(c=0; c<brickColumnCount; c++) {
if(c<brickRowCount)
  {   
        for(r=0; r<brickRowCount-c; r++) {
        if(bricks[c][r].status == 1) {
            var brickX = (c*(brickWidth+brickPadding))+brickOffsetLeft;
            var brickY = (r*(brickHeight+brickPadding))+brickOffsetTop;
            bricks[c][r].x = brickX;
            bricks[c][r].y = brickY;
            ctx.beginPath();
            ctx.rect(brickX, brickY, brickWidth, brickHeight);
            ctx.fillStyle = "yellow";
            ctx.fill();
            ctx.closePath();
        }
       }
   }
 else{
      for(r=0;r<=c-brickRowCount; r++){
         if(bricks[c][r].status == 1) {
            var brickX = (c*(brickWidth+brickPadding))+brickOffsetLeft;
            var brickY = (r*(brickHeight+brickPadding))+brickOffsetTop;
            bricks[c][r].x = brickX;
            bricks[c][r].y = brickY;
            ctx.beginPath();
            ctx.rect(brickX, brickY, brickWidth, brickHeight);
            ctx.fillStyle = "yellow";
            ctx.fill();
            ctx.closePath();
        }
     }
 }
}
}

function collisionDetection()
{
    for(c=0; c<brickColumnCount; c++) {

    if(c<brickRowCount){
        for(r=0; r<brickRowCount-c; r++) {
            var b = bricks[c][r];
            if(b.status == 1) {
                if(x > b.x && x < b.x+brickWidth && y > b.y && y < b.y+brickHeight) {
                    dy = -dy;
                    b.status = 0;
                    score=score+10;
                   if(score == 420) {
                        if(localStorage.score)
							localStorage.score=String(Number(localStorage.score)+score);
						else
							localStorage.setItem("score",String(score));
						clearInterval(t1);
                        alert("YOU WIN, CONGRATULATIONS!");
						alert("YOUR SCORE IS "+localStorage.score);
						txt.value=localStorage.score;
						f.submit();
                       // window.location="leveldisplay.php";
						}
                }
            }
        }
    }
    else{
       for(r=0;r<=c-brickRowCount;r++){
            var b = bricks[c][r];
            if(b.status == 1) {
                if(x > b.x && x < b.x+brickWidth && y > b.y && y < b.y+brickHeight) {
                    dy = -dy;
                    b.status = 0;  
                    score=score+10;
                       if(score == 420) {
                        if(localStorage.score)
							localStorage.score=String(Number(localStorage.score)+score);
						else
							localStorage.setItem("score",String(score));
						clearInterval(t1);
                        alert("YOU WIN, CONGRATULATIONS!");
						alert("YOUR SCORE IS "+localStorage.score);
						txt.value=localStorage.score;
						f.submit();
                       //window.location="leveldisplay.php";
					   }
         }
       }
     }
   } 

}
}

function drawScore() {
    ctx.font = "20px Arial";
    ctx.fillStyle = "#00FF00";
    ctx.fillText("Score: "+score, 8, 20);
}

function drawLives() {
    ctx.font = "20px Arial";
    ctx.fillStyle = "red";
    ctx.fillText("Lives: "+lives, canvas.width-75, 20);
}



function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
     drawBricks();
    drawBall();
    drawPaddle();
    drawScore();
    drawLives();
    collisionDetection();    
    if(x + dx > canvas.width-ballRadius || x + dx < ballRadius) {
        dx = -dx;
    }
    if(y + dy < ballRadius) {
        dy = -dy;
    }
    else if(y + dy > canvas.height-ballRadius-20) {
        if(x > paddleX && x < paddleX + paddleWidth) {
           if(y= y-paddleHeight){
            dy = -dy  ;
			 }
        }
        else {
            lives--;
          if(!lives) {
				if(localStorage.score)
					localStorage.score=String(Number(localStorage.score)+score);
				else
					localStorage.setItem("score",String(score));
				clearInterval(t1);
                alert("GAME OVER");
				alert("YOUR SCORE IS "+localStorage.score);
				txt.value=localStorage.score;
				localStorage.removeItem("score");
				f.submit();
               // window.location="leveldisplay.php";
            }
        else {
             x = canvas.width/2;
             y = canvas.height-30;
              dx = 2;
              dy = -2;
              paddleX = (canvas.width-paddleWidth)/2;
           }
        }
    }
    
    if(rightPressed && paddleX < canvas.width-paddleWidth) {
        paddleX += 7;
    }
    else if(leftPressed && paddleX > 0) {
        paddleX -= 7;
    }
    
    x += dx;
    y += dy;
}

var t1=setInterval(draw, 10);



function home()
			{
				if(localStorage.score)
				{
				localStorage.removeItem(localStorage.score);
				}
				window.location="WTproject2.php";
			}		
</script>
</body>
</html>
