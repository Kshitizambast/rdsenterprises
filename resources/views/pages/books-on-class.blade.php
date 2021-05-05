@extends('layouts.app')
@section('content')	

	<div id="myCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="w-100" src="/img/image4.jpeg">
        <div class="container">
        </div>
      </div>
      <div class="carousel-item">
        <img class="w-100" src="/img/image5.jpeg">
        <div class="container">
   
        </div>
      </div>
      <div class="carousel-item">
       <img class="w-100" src="/img/image6.jpeg">
        <div class="container">
          
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  		<hr/>
	  	<div class="nav-scroller py-1 mb-2" id="main">
	  		<h3>Buy Books</h3>
		    <nav class="nav d-flex justify-content-between">
          <a class="p-2 link-secondary" href="/#main">All</a>
		      @foreach($classes as $class)
		      	<a class="p-2 link-secondary" href="/class/{{$class->id}}/#main">Class {{$class->class_title}}</a>
		      @endforeach
		    </nav>
		  </div>
  	  <div class="row">
        @if(count($books) > 0)
  	  		@foreach($books as $book)
  	  			<div class="col-md-4 mb-5">
  	  				<div class="card">
  	  					 {{-- <img src="{{$book->book_image_url}}" class="card-img-top" alt="..."> --}}
  	  					 <div class="card-img-top bg-style" style="background-image: url({{$book->book_image_url}});"></div>
						  <div class="card-body">
						    <h5 class="card-title">{{$book->title}}</h5>
						    <h3>₹{{$book->price}}</h3>
						    <p class="card-text">{{$book->description}}</p>
                <h6 class="card-text"><b class="text-muted">{{App\Models\LanguageCategory::find($book->language_category_id)->language_title}}</b></h6>
						    <div class="d-grid gap-2">
							  <a class="btn btn-primary" type="button" href="/book/{{$book->id}}">Buy Now</a>
							</div>
						  </div>
  	  				</div>
  	  			</div>
	  		@endforeach
        @else
          <h2>Coming Soon .....</h2>
        @endif
  	  </div>
      <hr>
  	  <div id='about' class="mt-2">
  	  	<h3>Who are we?</h3>
  	  </div>
  	  @include('pages.about')

@endsection