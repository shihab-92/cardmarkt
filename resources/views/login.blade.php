@extends('home')

@section('content')
<div class="login">
	
	<div class="main-agileits">
		<div class="form-cardagile">
			<h3>Login</h3>
			<form action="login" method="post">
				@if (session()->has('flash_notification.message'))
				<div class="alert alert-{{ session('flash_notification.level') }}">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

					{!! session('flash_notification.message') !!}
				</div>
				@endif
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<div class="key">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<input  type="text" name="Email" required="" placeholder="Email">
					<div class="clearfix"></div>
				</div>
				@if (count($errors->get('Email')) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->get('Email') as $Email)
						<li>{{ $Email }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<div class="key">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input  type="password" name="Password" required="" placeholder="Password">
					<div class="clearfix"></div>
				</div>
				@if (count($errors->get('Password')) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->get('Password') as $Password)
						<li>{{ $Password }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<input type="submit" value="Login">
			</form>
		</div>
		<div class="forg">
			<a href="#" class="forg-left">Forgot Password</a>
			<a href="register" class="forg-right">Register</a>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@stop