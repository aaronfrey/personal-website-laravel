@extends('layouts.default')

@section('title', 'Contact Me')

@section('content')

	<h1>Get in Touch</h1>

	<p>Reach out and tell me a bit about yourself. Explain in a few words what sort of work you are looking to get done.</p>

	<form method="POST" action="/contact">
	  {{ csrf_field() }}
	  <input type="text" name="name" value="" class="form-control" required placeholder="Your Name *">
	  <input type="email" name="email" value="" class="form-control" required placeholder="Your Email *">
	  <input type="tel" name="telephone" value="" class="form-control" required placeholder="Your Phone Number *">
	  <input type="url" name="website" value="" class="form-control" placeholder="Your Website">
	  <textarea name="details" class="form-control" required placeholder="Details of your request *"></textarea>
	  <input type="submit" value="Send" class="btn btn-primary">
	</form>

@endsection