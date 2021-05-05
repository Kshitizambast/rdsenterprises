@extends('layouts.admin')
@section('content')
@include('include.messages')

 <h3>Edit Your Order.</h3>
 <button class="btn btn-info">PDF</button>
 <div class="card-body">
 	<form class="row g-3 needs-validation" method="post" action="/admin/orders/update/{{$order->id}}"  novalidate>
    @csrf
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Product Name</label>
    <select class="form-select" id="validationCustom04" name='book_id' required>
      <option selected  value="{{$order->book_id}}">{{$order->book->title}}</option>
      @foreach($books as $book)
        @if($book->id != $order->book_id)
         <option value="{{$book->id}}"><b>{{$book->title}}</b></option>
        @endif
      @endforeach
    </select>
    <div class="invalid-feedback">
      Please select a valid product.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Payble Amount</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{$order->payble}}" name="payble" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" name="email" 
            @if($order->student->email != null)
             value="{{$order->student->email}}"
            @else
              value="Not Avialable"
            @endif 

        disabled required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" value="{{$order->address}}" required>
    <div class="invalid-feedback">
      Please provide a valid Address.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Student Name</label>
    <input type="text" class="form-control" name="student" value="{{$order->student->student_name}}" required disabled>
    <div class="invalid-feedback">
      Please enter a valid student name.
    </div>
  </div>
  <div class="col-md-3">
   <label for="validationCustom04" class="form-label">Order Status</label>
    <select class="form-select" id="validationCustom04" name='order_status_id' required>
      <option selected  value="{{$order->order_status_id}}">{{$order->order_status->order_status_title}}</option>
      @foreach($order_statues as $_os)
        @if($_os->id  > $order->order_status_id)
          <option value="{{$_os->id}}"><b>{{$_os->order_status_title}}</b></option>
        @endif
      @endforeach
    </select>
    <div class="invalid-feedback">
      Please select a valid product.
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
 </div>
@endsection