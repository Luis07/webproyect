var Webmail=Webmail||
{
	/*para mostrar los botones de cambio bandejas*/
	show:function(){
		debugger;
		document.getElementById('navmenu').style.display = 'block';
		document.getElementsByClassName('btnmenu')[0].removeAttribute("onclick");
		document.getElementsByClassName('btnmenu')[0].setAttribute("onclick", "Webmail.hide()");	
		document.getElementsByClassName('vermensajeshide')[0].className='vermensajes';
	},
	/*para mostrar los botones de cambio bandejas*/
	hide:function(){
		debugger;
		document.getElementById('navmenu').style.display = 'none';
		document.getElementsByClassName('btnmenu')[0].removeAttribute("onclick");
		document.getElementsByClassName('btnmenu')[0].setAttribute("onclick", "Webmail.show()");
		document.getElementsByClassName('vermensajes')[0].className='vermensajeshide';
	},
	/*para cambio de boton cambio de color*/
	colorbs:function(){
		debugger
		document.getElementById('bs').className = 'quitarfondo btn btn-primary btnmenucolor ';
		document.getElementById('btn_redactar').className = 'quitarfondo btn btn-info botonnuevo botonnuevot glyphicon glyphicon-pencil colornuevo btnmenusincolor ';
		document.getElementById('be').className = 'quitarfondo btn btn-primary bajarunpoco grande btnmenusincolor ';
		document.getElementById('bo').className = 'quitarfondo btn btn-primary bajarunpoco grande btnmenusincolor ';
	},
	/*para cambio de boton cambio de color*/
	colorbe:function(){
		debugger
		document.getElementById('be').className = 'quitarfondo btn btn-primary btnmenucolor ';
		document.getElementById('btn_redactar').className = 'quitarfondo btn btn-info botonnuevo botonnuevot glyphicon glyphicon-pencil colornuevo btnmenusincolor ';
		document.getElementById('bs').className = 'quitarfondo btn btn-ttc bajarunpoco grande btnmenusincolor ';
		document.getElementById('bo').className = 'quitarfondo btn btn-primary bajarunpoco grande btnmenusincolor ';
	},
	/*para cambio de boton cambio de color*/
	colorbo:function(){
		debugger;
		document.getElementById('bo').className = 'quitarfondo btn btn-primary btnmenucolor ';
		document.getElementById('btn_redactar').className = 'quitarfondo btn btn-info botonnuevo botonnuevot glyphicon glyphicon-pencil colornuevo btnmenusincolor ';
		document.getElementById('bs').className = 'quitarfondo btn btn-ttc bajarunpoco grande btnmenusincolor ';
		document.getElementById('be').className = 'quitarfondo btn btn-primary bajarunpoco grande btnmenusincolor ';
	},
	/*para cambio de boton cambio de color*/
	colorbr:function(){
		debugger;
		document.getElementById('btn_redactar').className = 'quitarfondo btn btn-info botonnuevo botonnuevot glyphicon glyphicon-pencil colornuevo';
		document.getElementById('bs').className = 'quitarfondo btn btn-ttc bajarunpoco grande btnmenusincolor ';
		document.getElementById('be').className = 'quitarfondo btn btn-primary bajarunpoco grande btnmenusincolor ';
		document.getElementById('bo').className = 'quitarfondo btn btn-primary bajarunpoco grande btnmenusincolor ';
	},
	/*para pasar los correos a la bandeja de borrador*/
	safemail:function($ide){
		debugger;
		var id=$ide;
		var a=document.forms["formredactar"]["correo"].value;
		var b=document.forms["formredactar"]["asuntomensaje"].value;
		var c=document.forms["formredactar"]["contenidomensaje"].value;
		if (a==null || a=="",b==null || b=="",c==null || c=="")
		{
			alert("Please Fill All Required Field");
		}else{
			window.open('safesalida/'+a+'/'+b+'/'+c+'/'+id);
		}
	},	/*para pasar los correos a la bandeja de salida*/
	sendmail:function($ide){
		debugger;
		var id=$ide;
		var a=document.forms["formredactar"]["correo"].value;
		var b=document.forms["formredactar"]["asuntomensaje"].value;
		var c=document.forms["formredactar"]["contenidomensaje"].value;
		if (a==null || a=="",b==null || b=="",c==null || c=="")
		{
			alert("Please Fill All Required Field");
		}else{
			window.open('sendsalida/'+a+'/'+b+'/'+c+'/'+id);
		}
	},
	/*Metodo para mostrar al usuario el contenido de los mensajes*/
	Mostrarbo:function($ide){
		debugger;
		var buscardes='destino'+$ide;
		var buscarasun='asunto'+$ide;
		var buscarcont='contenido'+$ide;
		var para=document.getElementsByName(buscardes)[0].innerHTML;
		var asunto=document.getElementsByName(buscarasun)[0].innerHTML;
		var contenido=document.getElementsByName(buscarcont)[0].innerHTML;
		document.forms["formredactar"]["correo"].value=para;
		document.getElementById("asuntomensaje").value=asunto;
		document.getElementById("contenidomensaje").value=contenido;
		document.getElementById('ge').removeAttribute("onclick");
		document.getElementById('ge').setAttribute("onclick","Webmail.safemail("+$ide+")");
		document.getElementById('gs').removeAttribute("onclick");
		document.getElementById('gs').setAttribute("onclick","Webmail.sendmail("+$ide+")");
		$("#exampleModal").show(); 
	},
	/*Metodo para mostrar al usuario el contenido de los mensajes*/
	Mostrarbs:function($ide){
		debugger;
		var buscardes='destino'+$ide;
		var buscarasun='asunto'+$ide;
		var buscarcont='contenido'+$ide;
		var para=document.getElementsByName(buscardes)[0].innerHTML;
		var asunto=document.getElementsByName(buscarasun)[0].innerHTML;
		var contenido=document.getElementsByName(buscarcont)[0].innerHTML;
		document.forms["formredactar"]["correo"].value=para;
		document.getElementById("asuntomensaje").value=asunto;
		document.getElementById("contenidomensaje").value=contenido;
		document.getElementById('ge').removeAttribute("onclick");
		document.getElementById('ge').setAttribute("onclick","Webmail.safemail("+$ide+")");
		document.getElementById('gs').removeAttribute("onclick");
		document.getElementById('gs').setAttribute("onclick","Webmail.sendmail("+$ide+")");
		$("#exampleModal").show(); 
	},
	Mostrarbe:function($ide){
		debugger;
		var buscardes='destino'+$ide;
		var buscarasun='asunto'+$ide;
		var buscarcont='contenido'+$ide;
		var para=document.getElementsByName(buscardes)[0].innerHTML;
		var asunto=document.getElementsByName(buscarasun)[0].innerHTML;
		var contenido=document.getElementsByName(buscarcont)[0].innerHTML;
		document.forms["formredactar"]["correo"].value=para;
		document.getElementById("asuntomensaje").value=asunto;
		document.getElementById("contenidomensaje").value=contenido;
		document.getElementById('ge').removeAttribute("onclick");
		document.getElementById('ge').setAttribute("onclick","Webmail.safemail("+$ide+")");
		document.getElementById('gs').removeAttribute("onclick");
		document.getElementById('gs').setAttribute("onclick","Webmail.sendmail("+$ide+")");
		$("#exampleModal").show(); 
	},
	cerrar:function(){
		$("#exampleModal").hide(); 

	},
	eliminar:function($ide){
debugger;
		window.open('eliminar/'+$ide);
	} 
}