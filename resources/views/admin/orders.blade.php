@extends('layouts.admin')
@section('content')
<h2>Your Orders (Newest!)</h2>
@include('include.alert-messages')
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Order id</th>
            <th>Product</th>
            <th>Student </th>
            <th>Address</th>
            <th>Total Amount</th>
            <th>Order Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>
                    <p>{{$order->book->title}} <br>
                    (<b>{{$order->book->language_category->language_title}}</b>)
                    </p>
                </td>
                <td>{{$order->student->student_name}}</td>
                <td>
                	<div class="w-75">
                		{{$order->address}}
                	</div>
                </td>
                <td>{{$order->payble}}</td>
                <td>{{$order->order_status->order_status_title}}</td>
                <td>
                	<div class="d-flex px-3">
                		<a class="btn btn-primary btn-sm mx-3" href="orders/edit/{{$order->id}}" data-toggle="tooltip" data-placement="top" title="Edit or Update"  data-toggle="modal" data-target="#exampleModal{{$order->id}}"><span data-feather="edit"></span></a>
                          <!-- Edit Modal -->
                          <form method="post" action="orders/delete">
                            @csrf
                            <input type="hidden" name="order_id" value="{{$order->id}}">
                	<button class="btn btn-danger btn-sm" type="submit"><span data-feather="trash" data-toggle="tooltip" data-placement="top" title="Delete the order"></span></button>
                    </form>
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