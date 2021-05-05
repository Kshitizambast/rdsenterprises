@extends('layouts.app')
@section('content')
    <div class="py-5 text-center px-5 mt-5">
      <img class="d-block mx-auto mb-4" src="/img/RDS_Logo-01.jpg" alt="" width="72" height="57">
      <h2>Checkout for your delivery</h2>
      <p class="lead">You are subsribing for contactless delivery. We hope you enjoy your delivery</p>
    </div>
    @include('include.messages')
    <div class="row g-5 px-2 m-0">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your order</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
          	<div class="card">
			 {{-- <img src="{{$book->book_image_url}}" class="card-img-top" alt="..."> --}}
			    <div class="card-img-top bg-style" style="background-image: url({{$book->book_image_url}});"></div>
				  <div class="card-body">
				    <h5 class="card-title">{{$book->title}}</h5>
				    <h3>₹{{$book->price}}</h3>
				    <p class="card-text">{{$book->description}}</p>
				     <h6 class="card-text"><b class="text-muted">{{App\Models\LanguageCategory::find($book->language_category_id)->language_title}}</b></h6>
				  </div>
				</div>
            <div>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (INR)</span>
            <strong>₹{{$book->price}}</strong>
          </li>
        </ul>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate method="post" action="{{route('checkout')}}">
        	@csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Student name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" name="student_name" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Parents name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" name="parents_name" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Admission number</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Admission Number" name="admission_number" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <div class="col-md-5">
              <label for="country" class="form-label">Class</label>
              <select class="form-select"  name="class_books_id" required>
                <option value="">Choose...</option>
                @foreach($classes as $class)
                	<option value="{{$class->id}}">{{$class->class_title}}</option>
                @endforeach
                
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
               <label for="zip" class="form-label">Contact Number</label>
              <input type="text" class="form-control" name="contact_number" placeholder="" required>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Alternet Number</label>
              <input type="text" class="form-control" name="alternet_number" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>
          <input type="hidden" name="book_id" value="{{$book->id}}">

          <hr class="my-4">
          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
@endsection