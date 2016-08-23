@extends("guest_base")

@section('content')
	<div class="main-page login-page ">
		<h3 class="title1">Iniciar Sesi&oacute;n</h3>
		<div class="widget-shadow">
			<div class="login-top">
				<h4>SIADEC te estaba esperando!<br> No tienes cuenta? <a href="/signup">  Reg&iacute;strate »</a> </h4>
			</div>
			<div class="login-body">
				<form method="post" action="signin">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<input type="text" class="user" name="email" placeholder="Coloca tu email" required="">
					<input type="password" name="password" class="lock" placeholder="Contrase&ntilde;a">
					<input type="submit" name="Sign In" value="Entrar">
				</form>
			</div>
		</div>
	</div>

@stop