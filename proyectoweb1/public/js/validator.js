var Webmail=Webmail||
{
	/*funcion para validar el frm de registro*/
	validar:function() {
		debugger;
		$campos=new Array();
		$camposfuel=0;
		Webmail.limpiarcamposerr();
		$campos[0]=Webmail.validarnombre();
		$campos[1]=Webmail.validarapellido();
		$campos[2]=Webmail.validarEmail();	
		$campos[3]=Webmail.validarpass();
		for (var i =0; i <$campos.length; i++) {
			if($campos[i]!="false"){
				$camposfuel+=1;
			}
			if($camposfuel==4&&!document.getElementById('checkterm').checked){
				$('#check_err').text("Debe aceptar los terminos de servicio de Webmail");
			}
			if($camposfuel==4&&document.getElementById('checkterm').checked)
			{
				$para=document.getElementById('email').value;
				$asunto="Confirmacion de Registro";
				$contenido="Por favor confirme su registro para activar su cuenta en Webmail";
			window.open('mail/'+$para+'/'+$asunto+'/'+$contenido);
			self.close('registro');
			}
		}
	},
	/*funcion para ver que el nombre no venga vacio*/
	validarnombre:function()
	{
		if (document.getElementById('nombre').value=="")
		{
			$("#name_err").text("Campo requerido");
			return "false"; 
		}
	},
	/*funcion para validar que el apellido no veng vacio*/
	validarapellido:function()
	{
		if (document.getElementById('apellido').value=="")
		{
			$("#apellido_err").text("Campo requerido"); 
			return "false"; 
		}
	},
	/*funcion para validar la direccion del email*/
	validarEmail:function(valor) {
		if(document.getElementById('email').value==""){
			$('#email_err').text("Campo requerido");
			return "false"; 
		}else{
			expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if ( !expr.test(document.getElementById('email').value) ){
				$('#email_err').text("La direcciÃ³n de email es incorrecta.");
				return "false";  }
			}
		},
		/*funcion para validar la contraseÃ±a*/
		validarpass:function()
		{
			if(password=document.getElementById('password').value=="")
			{
				$('#pass_err').text("Campo requerido"); 
				return "false"; }else
				{
					if(password=document.getElementById('password').value.length<8)
					{
						$('#pass_err').text("The password must be have 8 characters");
						return "false"; 
					}
				}
			},
			/*funcion para limpiar los campos de error*/
			limpiarcamposerr:function(){
				$("#name_err").text("");
				$("#apellido_err").text("");
				$("#email_err").text("");
				$("#pass_err").text("");
				$("#check_err").text("");
			}
		}