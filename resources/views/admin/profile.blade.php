@extends('layouts.admin')
@section('content')
<div class="row  mx-5 px-5" >
	@include('include.messages')
	@include('include.alert-messages')	
	<h5>You can update your credentials {{auth()->user()->name}}.</h5>
	<div class="card-body">
		<form method="post" action="{{route('update_user_profile')}}">
			@csrf
		 <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Name</label>
		    <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}">
		    <div id="emailHelp" class="form-text">Never share your credentials with anyone else.</div>
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Email address</label>
		    <input type="email" class="form-control" name="email" value="{{auth()->user()->email}}">
		    <div id="emailHelp" class="form-text">Never share your credentials with anyone else.</div>
		  </div>
		   <button type="submit" class="btn btn-primary">Update Profile</button>
	  </form>
	</div>
	<div class="mt-5">
		  <hr>
		  <h6 class="mb-3">Password</h6>
		  <form method="post" action="{{route('update_profile')}}">
			@csrf
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Old Password</label>
		    <input type="password" class="form-control"  name="password">
		     <div id="emailHelp" class="form-text">Never share your credentials with anyone else.</div>
		  </div>
		    <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">New Password</label>
		    <input type="password" class="form-control" name="new_password" >
		     <div id="emailHelp" class="form-text">Never share your credentials with anyone else.</div>
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Repeat New Password</label>
		    <input type="password" class="form-control" name="new_password_confirmation" >
		     <div id="emailHelp" class="form-text">Never share your credentials with anyone else.</div>
		  </div>
		  <hr>
	  		<div class="mb-3 form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
			</div>
		  <button type="submit" class="btn btn-primary">Update Password</button>
		</form>
		</div>
</div>

@endsection