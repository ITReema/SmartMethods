var canvas = document.getElementById('DemoCanvas');
var ctx = canvas.getContext('2d');
var x = 10;
var y = 45;
 
ctx.beginPath(); 
ctx.moveTo(x,y);
ctx.lineTo(180,47);
ctx.fillText("◉", x-3 , y+3 );
ctx.lineTo(180,200);
ctx.lineTo(90,200);
ctx.fillText("◀", x+77 , y+159 );
ctx.stroke();


var toggle  = document.getElementById("start");
var content = document.getElementById("DemoCanvas");

toggle.addEventListener("click", function() {
  content.classList.toggle("show");
});