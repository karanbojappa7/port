var c = document.getElementById("canvassm");
canvassm.width = window.innerWidth;
canvassm.height = window.innerHeight;
var ctx = c.getContext("2d");
var mouse = 
{
	x: undefined,
	y: undefined
}
var maxRadius = 40;
var minRadius = 2;
var colorArray = 
[
	'#ffffff',
//	'#298089',
	'#2C3E80',
//	'#E74C3C',
//	'#ECF0F1',
];
window.addEventListener
('mousemove',	
	function(event)
 {
	mouse.x = event.x;
	mouse.y = event.y;
})
window.addEventListener('resize', function()
{
canvassm.width = window.innerWidth;
canvassm.height = window.innerHeight;
});
function circle(x, y, dx, dy, radius) 
{
	this.x = x;
	this.y = y;
	this.dx = dx;
	this.dy = dy;
	this.minRadius = radius;
	this.radius = radius;
	this.color = colorArray[Math.floor(Math.random() * colorArray.length)];
	this.draw = function() 
{
ctx.beginPath();
ctx.beginPath();
ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
ctx.fillStyle = this.color;
		ctx.fill();		
}
	this.update = function()
  {
		if (this.x + this.radius > innerWidth || this.x - this.radius < 0)
	{
	this.dx = -this.dx;
}
	if (this.y + this.radius > innerHeight || this.y - this.radius < 0)
{
	this.dy = -this.dy;	
}
this.x += this.dx;
this.y += this.dy;		

		
if (mouse.x - this.x < 40 && mouse.x - this.x > -40 && 
	mouse.y - this.y < 40 && mouse.y - this.y > -40)
{
	if (this.radius < maxRadius) 
   {
	 this.radius += 1;
   }
}else if (this.radius > this.minRadius)
 {
	this.radius -= 1;
 }
		this.draw();		
  }
}
var circleArray = [];
for (var i = 0; i < 200; i++){
	var radius = Math.random() * 3 + 1;
var x = Math.random() * (innerWidth - radius * 2) + radius;
var y = Math.random() * (innerHeight - radius * 2) + radius;
var dx = Math.random() - 0.5;
var dy = Math.random() - 0.5;
	circleArray.push(new circle(x, y, dx, dy, radius));
}
function animate()
{
	requestAnimationFrame(animate);
	ctx.clearRect(0, 0, innerWidth, innerHeight);	
for (var i = 0; i < circleArray.length; i++)
{
	circleArray[i].update();
}
}
animate();