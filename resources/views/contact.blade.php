@extends('home')

@section('content')
<div class="sub-banner-contact">
</div>
<div class="contact">
	<div class="container">
		<h3>Contact Us</h3>
		<div class="col-md-3 col-sm-3 contact-left">
			<div class="address">
				<h4>ADDRESS</h4>
				<h5>345 Setwant natrer,</h5>
				<h5>Washington. United States.</h5>
			</div>
			<div class="email">
				<h4>EMAIL</h4>
				<h5><a href="mailto:info@example.com">example@gmail.com</a></h5>
				<h5><a href="mailto:info@example.com">example2@yahoo.com</a></h5>
			</div>
		</div>
		<div class="col-md-9 col-sm-9 contact-right">
			<form action="contact" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<input type="text" name="your_name" placeholder="Your name" required>
				<input type="text" name="your_email" placeholder="Your email" required>
				<input type="text" name="your_subject" placeholder="Your subject" required>
				<input type="text" name="your_phone_number" placeholder="Phone number" required>
				<textarea  name="your_message" placeholder="Your message" required></textarea>
				@if($errors->has())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif

				<input type="submit" value="Send message">
				@if (session()->has('flash_notification.message'))
				<div class="alert alert-{{ session('flash_notification.level') }}">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

					{!! session('flash_notification.message') !!}
				</div>
				@endif
			</form>
		</div>
	</div>
</div>
<div class="map-cardls">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22702.22744502486!2d11.113366067229226!3d44.662878362361056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fc3eca9065c15%3A0x12ec8a03aadae866!2s40019+Sant&#39;Agata+Bolognese+BO%2C+Italy!5e0!3m2!1sen!2sin!4v1451281303075" allowfullscreen></iframe>
</div>

@stop