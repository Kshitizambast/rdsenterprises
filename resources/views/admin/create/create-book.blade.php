@extends('layouts.admin')
@section('content')
@include('include.messages')

 <h3>Add New Book.</h3>
 <div class="card-body">
 	<form class="row g-3 needs-validation" method="post" action="/admin/books/upload"  novalidate>
    @csrf
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Book Title</label>
    <input type="text" class="form-control" name="title" required>
    <div class="invalid-feedback">
      Please enter a valid title.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Price</label>
    <input type="text" class="form-control" id="validationCustom02"  name="price" required>
    <div class="valid-feedback">
      Please enter a valid price.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Book Image Url</label>
    <input type="text" class="form-control" id="validationCustom02"  name="book_image_url" required>
    <div class="valid-feedback">
      Please enter a valid url.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Class</label>
    <select class="form-select" id="validationCustom04" name='class_books_id' required>
    		<option selected value="null">Chosse..</option>
      @foreach($class_books as $_cb)
        <option value="{{$_cb->id}}" >{{$_cb->class_title}}</option>
      @endforeach
    </select>
    <div class="invalid-feedback">
      Please select a valid class.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Language</label>
    <select class="form-select" id="validationCustom04" name='language_category_id' required>
    	<option selected value="null">Chosse..</option>
      @foreach($language_categories as $_lc)
        <option   value="{{$_lc->id}}">{{$_lc->language_title}}</option>
      @endforeach
    </select>
    <div class="invalid-feedback">
      Please select a valid language.
    </div>
  </div>
  <div class="col-md-6">
   <label for="validationCustom04" class="form-label">Product Available</label>
    <select class="form-select" id="validationCustom04" name='available' required>
      <option selected  value="1">YES</option>
      <option value="0">NO</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid option.
    </div>
  </div>
  <div class="col-12">
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px " name="description"></textarea>
          <label for="floatingTextarea">A little description.</label>
        </div>
        <div class="invalid-feedback">
          Please select a valid option.
        </div>
  </div>
  <hr>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Add Book</button>
  </div>
</form>
 </div>
@endsection