@extends("guest_base")

@section('content')
<style>
	input[type="submit"]{
		width: 100% !important;
		margin: auto !important;
		
	}
	.sub_home{
		margin: auto !important;
	}
</style>
	<div class="main-page signup-page">
		<h3 class="title1">Formulario de Registro</h3>
		<p class="creating">Por medio de este registro podr&aacute; acceder a los beneficios que SIADEC ha preparado para usted</p>
		<form method="POST" action="/register">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			<div class="sign-up-row widget-shadow">
				<h5>Informaci&oacute;n de su Cuenta :</h5>
				<div class="sign-u">
					<div class="sign-up1">
						<h4>Nombres* :</h4>
					</div>
					<div class="sign-up2">
						<input name="name" id="name" type="text"  required>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="sign-u">
					<div class="sign-up1">
						<h4>Apellidos* :</h4>
					</div>
					<div class="sign-up2">
						<input name="lastname" id="lastname" type="text" required>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="sign-u">
					<div class="sign-up1">
						<h4>Email* :</h4>
					</div>
					<div class="sign-up2">
						<input name="email" type="text" required>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="sign-u">
					<div class="sign-up1">
						<h4>Contrase&ntilde;a*:</h4>
					</div>
					<div class="sign-up2">
						<input name="pass" type="password" required>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="sign-u">
					<div class="sign-up1">
						<h4>Confirmar Contrase&ntilde;a* :</h4>
					</div>
					<div class="sign-up2">
						<input name="repeat_pass" type="password" required>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="sub_home">
					<input type="submit" value="Enviar solicitud de registro" style="left:50%">
					<div class="clearfix"> </div>
				</div>
			</div>
		</form>
	</div>
@stop