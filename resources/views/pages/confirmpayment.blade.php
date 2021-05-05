@extends('layouts.app')
@section('content')
<div style="margin-top:100px" class="justify-content-between">
	<div class="card">
		<div class="card-header w-"><h5>Procees For Payment</h5></div>
		<div class="card-body">
			<ul class="list-group">
			  <li class="list-group-item"><h4>Amount (Book Price + Service Fee (2%) ): ₹{{$config['amount']}}</h4></li>
			  <li class="list-group-item"><h4>Product: {{$config['productinfo']}}</h4></li>
			  <li class="list-group-item"><h4>Name: {{$config['firstname']}}</h4></li>
			  <li class="list-group-item"><h4>Email: {{$config['email']}}</h4></li>
			</ul>
		</div>
	</div>
	<form name="myForm" id="myForm" target="_myFrame"  method="POST" action="https://test.payu.in/_payment">
	@csrf
<input type="hidden" name="firstname" value="{{$config['firstname']}}" />
<input type="hidden" name="lastname" value="" />
<input type="hidden" name="surl" value="{{$config['surl']}}" />
<input type="hidden" name="phone" value="{{$config['phone']}}" />
<input type="hidden" name="key" value="{{$config['key']}}" />
<input type="hidden" name="hash" value =
"{{$config['hash']}}" />
<input type="hidden" name="curl" value="{{$config['curl']}}" />
<input type="hidden" name="furl" value="{{$config['furl']}}" />
<input type="hidden" name="txnid" value="{{$config['txnid']}}" />
<input type="hidden" name="productinfo" value="{{$config['productinfo']}}" />
<input type="hidden" name="udf1" value="{{$config['udf1']}}" />
<input type="hidden" name="udf2" value="{{$config['udf2']}}" />
<input type="hidden" name="udf3" value="{{$config['udf3']}}" />
<input type="hidden" name="udf4" value="{{$config['udf4']}}" />
<input type="hidden" name="udf5" value="{{$config['udf5']}}" />

<input type="hidden" name="amount" value="{{$config['amount']}}" />
<input type="hidden" name="email" value="{{$config['email']}}" />
<div class="py-2">
	<input type= "submit" value="Proceed To Pay" class="btn btn-success mt-3">
 <a href="/" class="btn btn-danger mt-3 mx-5">Go Back</a>
</div>
</form>

</div>


@endsection