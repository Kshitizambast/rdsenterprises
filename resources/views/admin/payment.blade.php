@extends('layouts.admin')
@section('content')
<h2>Your payments (Newest!)</h2>
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Paid Amount</th>
            <th>Order id</th>
            <th>Payment Date</th>
            <th>Payment Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($payments as $payment)
            <tr>
                <td>{{$payment->paid_amount}}</td>
                <td>{{$payment->book->title}}</td>
                <td>{{$payment->paid_at}}</td>

                <td>
                    @if($payment->allowed == 1)
                        <b class="text-success">Done</b>
                    @else
                        <b class="text-danger">Some Error Occur</b>
                    @endif
                
                </td>
                <td>
                	<div class="d-flex px-3">
                		<button class="btn btn-primary btn-sm mx-3" data-toggle="tooltip" data-placement="top" title="Edit or Update"><span data-feather="edit"></span></button>
                	<button class="btn btn-danger btn-sm"><span data-feather="trash" data-toggle="tooltip" data-placement="top" title="Delete the payment"></span></button>
                	</div>
                </td>
            </tr>
        @endforeach
</table>
<script type="text/javascript">
	$(document).ready(function() {
    	$('#example').DataTable();
} );
</script>
@endsection