@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col">
		<div class="card-body" style="margin-top: 200px">
			@if($message == 'Payment Failed For Some Reason')
			<div class="alert alert-danger">
				<h3>{{$message}}</h3>
			<a href="/" class="btn btn-primary">Go Back</a>
			</div>
			@else
				<div class="alert alert-success">
				<h3>{{$message}}</h3>
				<ul>
					<li>Order id : {{$txnid}}</li>
					<li>Amount : ₹{{$amount}}</li>
				</ul>
				<a href="/" class="btn btn-primary">Go Back</a>
			</div>
			@endif
		</div>	
	</div>
		<div class="col">
		
	</div>
</div>
@endsection