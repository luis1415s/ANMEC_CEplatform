const lis=document.querySelectorAll('.active');
var di=document.getElementById('di');
var ho=document.getElementById('ho');
var cs=document.getElementById('cs');
var iniciaSe=document.getElementById('iniciaSe');

function activo(){
	lis.classList.remove('active')
	ho.classList.remove('active');
	cs.classList.remove('active');
	iniciaSe.classList.remove('active');
	di.classList.add('active');
}