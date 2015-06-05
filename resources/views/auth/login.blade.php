@extends('admin.layouts')

@section('content')
	<div class="container">
		<!-- Page Content goes here -->
		<div class="container-fluid login-form">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading auth-head teal-text">Авторизация</div>
						<div class="panel-body">
							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li class="red-text">{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

							<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="row">
									<div class="input-field col s12">

										<input id="login" type="text" name="email" required="" class="validate">
										<label for="login">Email</label>
									</div>

									<div class="input-field col s12">
										<input id="pass" type="password" name="password" required="" class="validate" >
										<label for="pass">Пароль</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-large btn-block">Войти</button>

										<!--<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>-->
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
