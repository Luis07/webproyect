@extends('layouts.principal')
@section('panelprincipal')
<section class="container-fluid ">
	<div class="row ">
		<nav class="col-xs-12 col-sm-12 col-md-12 navbar navbar-inverse navtitulo color"> 		
			<nav >
				<button title="Menu" type="button" class="quitarfondo btnmenu btn btn-default animated" aria-label="Left Align"onclick="Webmail.hide();" name="btnmenu">
					<span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
				</button>
			</nav>
		</nav>
	</div>
</section>
@stop
@section('bandejas')
<section  class="container-fluid">
	<div class="row">
		<nav class="posicion navt col-xs-3 col-sm-3 col-md-4" name"navmenu" id="navmenu">
			<div>
				<button id="btn_redactar" data-toggle="modal" data-target="#exampleModal" class="quitarfondo btn btn-info botonnuevo botonnuevot glyphicon glyphicon-pencil colornuevo" aria-hidden="true" onclick="Webmail.colorbr();"> Redactar
				</button>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 divbandejas" >
				<div>		
					<div >
						<button class="btnmenucolor btn btn-primary colorinicial" type="button" onclick ="Webmail.colorbo();location.href='borrador'" id="bo">	<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
							Borrador</button>
						</div>
						<div>
							<button class="quitarfondo btn btn-ttc bajarunpoco grande" type="button" id="bs" onclick="Webmail.colorbs();location.href='salida'">
								<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
								Salida</button>
							</div>
							<div >
								<button class="quitarfondo btn btn-primary bajarunpoco grande" type="button" onclick ="Webmail.colorbe();location.href='enviados'" id="be">	<span class="
									glyphicon glyphicon-send" aria-hidden="true"></span>
									Enviados</button>
								</div>	
							</div>
						</div>
					</div>
				</nav>
			</div>
		</section>
		@stop
		@section('viewmensajes')
		<section class="container-fluid ">
			<div class="row">
				<div class="container">
					<div class=".col-md-6 .col-md-offset-3 vermensajes ">
						<table class="color marcado bandejas ">
							<thead>
							</thead>
							<tbody id="users_table">
								<?php  if (is_array ($emails)) {
									foreach($emails as $emails) { ?>
									<tr>
										<td id="<?php echo $emails->id?>" onclick="{{$metodo}}(<?php echo $emails->id?>);"name="destino<?php echo $emails->id?>"><?php echo( $emails->destino); ?></td>
										<td id="<?php echo $emails->id?>" onclick="{{$metodo}}(<?php echo $emails->id?>);"name="asunto<?php echo $emails->id?>"><?php echo( $emails->asunto ); ?></td>
										<td id="<?php echo $emails->id?>" onclick="{{$metodo}}(<?php echo $emails->id?>);"name="contenido<?php echo $emails->id?>"><?php echo( $emails->contenido ); ?></td>
								</button> </a><td >	<a href="eliminar\<?php echo( $emails->id);?>" title="Eliminar correo">
                    <img class="im linea paddingr glyphicon glyphicon-trash"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                  </a></td>
										</tr>
									<?php }} ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</section>
				@stop			
				@section('correos')
				<section class="container-fluid ">
					<div class="row">
						<form name="formredactar">
							<div class="modal animated bounceInUp derecha " id="exampleModal"  keyboard: "false" data-keyboard="false" data-backdrop="static"tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button onclick="Webmail.cerrar();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="exampleModalLabel">Nuevo Mensaje</h4>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label for="recipient-name" class="control-label">Para:</label>
												<input type="text" class="form-control" placeholder="E-mail" aria-describedby="sizing-addon1"id="email"pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" name="correo" id="correo" multiple="true" required>
											</div>
											<div class="form-group">
												<label for="recipient-name" class="control-label">Asunto:</label>
												<input type="text" class="form-control" id="asuntomensaje" required>
											</div>
											<div class="form-group">
												<label for="message-text" class="control-label">Mensaje:</label>
												<textarea  name="contenidomensaje" type"textarea" class="form-control " id="contenidomensaje"></textarea>
											</div>
										</div>
										<div class="modal-footer ">
											<button class="btn btn-success footnewmensaje" onclick="Webmail.safemail();"  id="ge">Guardar</button>
											<button class="btn btn-primary footnewmensaje"  onclick="Webmail.sendmail();window.location.reload();"  id="gs">Enviar</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</section>
				@stop
				@section('vermensajes')
				<section class="container-fluid ">
					<div class="row">
						<form name="formrver">
						<div class="modal animated bounceInDown derecha" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" onclick="Webmail.cerrar();" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="exampleModalLabel">Mensaje</h4>
									</div>
									<div class="modal-body">
										<form name="formreditar">
											<div class="form-group">
												<label for="recipient-name" class="control-label">Para:</label>
												<input type="text" readonly="readonly"  class="form-control" id="vmensajepara"  pattern="[^ @]*@[^ @]*" name="vmensajepara">
											</div>
											<div class="form-group">
												<label for="recipient-name" class="control-label">Asunto:</label>
												<input type="text" readonly="readonly" class="form-control" id="vasuntomensaje"name="vasuntomensaje">
											</div>
											<div class="form-group">
												<label for="message-text" class="control-label">Mensaje:</label>
												<textarea  type"textarea" readonly="readonly" class="form-control " name="vcontenidomensaje" id="vcontenidomensaje"></textarea>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
							</form>
					</div>
				</section>
				@stop