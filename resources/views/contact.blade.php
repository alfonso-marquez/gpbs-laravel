@extends('layouts.app')

@section ('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h2 class="section-heading text-uppercase">Contact Us</h2>
			<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">

			@if (Session::has('flash_message'))
				<div class="alert alert-success"> {{Session::get('flash_message') }}</div>
				@endif

			<form method="post" action="{{ route('contact.store') }}">
				{{csrf_field()}}
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input class="form-control" type="text" name="name" placeholder="Name *">
							@if ($errors->has('name'))
							<small class="form-text invalid-feedback"> {{ $errors->first('name') }}</small>
							@endif
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="email" placeholder="Email Address *">
							@if ($errors->has('email'))
							<small class="form-text invalid-feedback"> {{ $errors->first('email') }}</small>
							@endif
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="company" placeholder="Company *">
							@if ($errors->has('company'))
							<small class="form-text invalid-feedback"> {{ $errors->first('company') }}</small>
							@endif
						</div>

					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input class="form-control" type="tel" name="contact" placeholder="Contact No. *">
							@if ($errors->has('contact'))
							<small class="form-text invalid-feedback"> {{ $errors->first('contact') }}</small>
							@endif
						</div> 
						<div class="form-group">
							<textarea class="form-control" name="message" placeholder="Message *"></textarea>
							@if ($errors->has('message'))
							<small class="form-text invalid-feedback"> {{ $errors->first('message') }}</small>
							@endif

						</div>
					</div>
					<div class="col-lg-12 text-center">
						<div id="success"></div>
						<button class="btn btn-primary">Send Message</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


@endsection