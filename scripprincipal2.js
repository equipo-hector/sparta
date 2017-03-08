$(document).on("ready",configuraAPP);

function configuraAPP()
{
	var canvas = document.getElementById("micanvas");
	var ctx = canvas.getContext("2d");
	canvas.width = screen.availWidth;
	dibujafooter(canvas,contexto)
}
 function dibujafooter(canvas,contexto)
 {
 contexto.fillstyle ="rgba(0,0,0,8)";
 contexto.moveTo(0,0);
 contexto.quadraticCurveto(0,500,canvas.whidth=100,canvas.height=50)
 contexto.fill();
 //quadraticCurveto (cpx,cpy,x,y);
 }
 