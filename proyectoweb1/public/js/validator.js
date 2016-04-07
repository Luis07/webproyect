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
		safemail:function(){
	var a=document.forms["formredactar"]["correo"].value;
    var b=document.forms["formredactar"]["asuntomensaje"].value;
    var c=document.forms["formredactar"]["contenidomensaje"].value;
    if (a==null || a=="",b==null || b=="",c==null || c=="")
      {
      alert("Please Fill All Required Field");
      }else{
      	window.open('safesalida/'+a+'/'+b+'/'+c);
      }
	},	/*para pasar los correos a la bandeja de salida*/
		sendmail:function(){
	var a=document.forms["formredactar"]["correo"].value;
    var b=document.forms["formredactar"]["asuntomensaje"].value;
    var c=document.forms["formredactar"]["contenidomensaje"].value;
    if (a==null || a=="",b==null || b=="",c==null || c=="")
      {
      alert("Please Fill All Required Field");
      }else{
      	window.open('sendsalida/'+a+'/'+b+'/'+c);
      }
	}
}