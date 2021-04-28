@extends('layouts.admin')
@section('content')
<h2>Your books</h2>
<a href="/admin/books/create" type="button" class="btn btn-primary">Add More Books</a>
@include('include.alert-messages')
<div class="card-body">
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Class</th>
            <th>Language</th>
            <th>Description</th>
            <th>Available</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($books as $book)
            <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->class_books->class_title}}</td>
                <td>{{$book->language_category->language_title}}</td>
                <td>
                	<div class="w-75">
                		{{$book->description}}
                	</div>
                </td>
                <td>
                    @if($book->available == 1)
                        <b class="text-success">Yes</b>
                    @else
                        <b class="text-danger">No</b>
                    @endif
                </td>
                <td>{{$book->price}}</td>
                <td>
                	<div class="d-flex px-3">
                		<a class="btn btn-primary btn-sm mx-3" href="books/edit/{{$book->id}}" data-toggle="tooltip" data-placement="top" title="Edit or Update"><span data-feather="edit"></span></a>

                	 <form method="post" action="books/delete">
                            @csrf
                    <input type="hidden" name="book_id" value="{{$book->id}}">
                    <button class="btn btn-danger btn-sm" type="submit"><span data-feather="trash" data-toggle="tooltip" data-placement="top" title="Delete the book"></span></button>
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
</div>
@endsection