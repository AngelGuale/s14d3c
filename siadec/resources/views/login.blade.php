@extends("guest_base")

@section('content')
	<div class="main-page login-page ">
		<h3 class="title1">Log In</h3>
		<div class="widget-shadow">
			<div class="login-top">
				<h4>SIADEC is waiting for you!<br> No account? <a href="/signup">  Signup »</a> </h4>
			</div>
			<div class="login-body">
				<form method="post" action="signin">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<input type="text" class="user" name="email" placeholder="Email" required="">
					<input type="password" name="password" class="lock" placeholder="Password">
					<input type="submit" name="Sign In" value="Log In">
				</form>
			</div>
		</div>
	</div>

@stop