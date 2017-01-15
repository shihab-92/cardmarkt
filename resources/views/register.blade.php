@extends('home')

@section('content')

<div class="login">
	<div class="main-agileits">
		<div class="form-cardagile">
			<h3>Register</h3>
			<form action="register" method="post">
				@if (session()->has('flash_notification.message'))
				<div class="alert alert-{{ session('flash_notification.level') }}">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

					{!! session('flash_notification.message') !!}
				</div>
				@endif
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<div class="key">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input  type="text"  name="Username"   placeholder="Username" required>
					<div class="clearfix"></div>
				</div>
				@if (count($errors->get('Username')) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->get('Username') as $Username)
						<li>{{ $Username }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<div class="key">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input  type="text"  name="firstName"   placeholder="First name" required>
					<div class="clearfix"></div>
				</div>
				@if (count($errors->get('firstName')) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->get('firstName') as $firstName)
						<li>{{ $firstName }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<div class="key">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input  type="text"  name="lastName"   placeholder="Last name" required>
					<div class="clearfix"></div>
				</div>
				@if (count($errors->get('lastName')) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->get('lastName') as $lastName)
						<li>{{ $lastName }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<div class="key">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<select name="type" required>
						<option value="">Type</option>
						<option value="company">Company</option>
						<option value="individual">Individual</option>
					</select>
					<div class="clearfix"></div>
				</div>
				@if (count($errors->get('type')) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->get('type') as $type)
						<li>{{ $type }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<div class="key">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<input  type="text"  name="Email"    placeholder="Email" required>
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
					<input  type="password"  name="Password"  id="Password"  placeholder="Password" required>
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
				<div class="key">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input  type="password" name="Confirm_Password" id="Confirm_Password"   placeholder="Confirm Password" required>
					<div class="clearfix"></div>
				</div>
				@if (count($errors->get('Confirm_Password')) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->get('Confirm_Password') as $Confirm_Password)
						<li>{{ $Confirm_Password }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<input type="submit" value="Register">
			</form>
		</div>
	</div>
</div>
@stop