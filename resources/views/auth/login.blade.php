@extends('layouts.app')
@section('content')
<div class="row  mx-5 px-5" style="margin-top: 200px">
	@include('include.messages')
	<h5>Please Login For Admin Pannel</h5>
	<div class="card-body">
		<form method="post" action="{{route('authenticate')}}">
			@csrf
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
		  <div class="row">
		  	<div class="col">
		  		<div class="mb-3 form-check">
				    <input type="checkbox" class="form-check-input" name="remember">
				    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div>
		  	</div>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
</div>
@endsection