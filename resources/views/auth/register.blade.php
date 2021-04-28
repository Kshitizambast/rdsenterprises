@extends('layouts.app')
@section('content')
<div class="row  mx-5 px-5" style="margin-top: 200px">
	@include('include.messages')
	<h5>Please Login For Admin Pannel</h5>
	<div class="card-body">
		<form method="post" action="{{route('register_user')}}">
			@csrf
		 <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Name</label>
		    <input type="text" class="form-control" name="name">
		    <div id="emailHelp" class="form-text">Never share your credentials with anyone else.</div>
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Email address</label>
		    <input type="email" class="form-control" name="email">
		    <div id="emailHelp" class="form-text">Never share your credentials with anyone else.</div>
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password</label>
		    <input type="password" class="form-control" name="password">
		     <div id="emailHelp" class="form-text">Never share your credentials with anyone else.</div>
		  </div>
		    <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Repeat Password</label>
		    <input type="password" class="form-control" name="password_confirmation">
		     <div id="emailHelp" class="form-text">Never share your credentials with anyone else.</div>
		  </div>

	  		<div class="mb-3 form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
			</div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
</div>
@endsection