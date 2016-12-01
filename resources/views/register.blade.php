@extends('home')

@section('content')
<div class="login">
	
	<div class="main-agileits">
		<div class="form-cardagile">
			<h3>Register</h3>
			<form action="#" method="post">
				<div class="key">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input  type="text"  name="Username" required=""  placeholder="Username">
					<div class="clearfix"></div>
				</div>
				<div class="key">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<input  type="text"  name="Email"  required=""  placeholder="Email">
					<div class="clearfix"></div>
				</div>
				<div class="key">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input  type="password"  name="Password"  required="" placeholder="Password">
					<div class="clearfix"></div>
				</div>
				<div class="key">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input  type="password" name="Confirm Password" required="" placeholder="Confirm Password">
					<div class="clearfix"></div>
				</div>
				<input type="submit" value="Register">
			</form>
		</div>
	</div>
</div>
@stop