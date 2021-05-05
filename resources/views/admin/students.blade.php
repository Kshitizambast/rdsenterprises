@extends('layouts.admin')
@section('content')
<h2>Your Students</h2>
<div class="card-body">
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
        	<th><input type="checkbox" class="selectAll" name="selectAll" value="all"></th>
            <th>Admission Number</th>
            <th>Name</th>
            <th>Class</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($students as $student)
            <tr>
            	<td></td>
                <td>{{$student->admission_number}}</td>
                <td>{{$student->student_name}}</td>
                <td>{{$student->class_books->class_title}}</td>
                <td>
                	<div class="w-75">
                		{{$student->address}}
                	</div>
                </td>
                <td>{{$student->contact_number}}</td>
                <td>{{$student->email}}</td>
                <td>
                	<div class="d-flex px-3">
                		<button class="btn btn-primary btn-sm mx-3" data-toggle="tooltip" data-placement="top" title="Edit or Update"><span data-feather="edit"></span></button>
                	<button class="btn btn-danger btn-sm"><span data-feather="trash" data-toggle="tooltip" data-placement="top" title="Delete the student"></span></button>
                	</div>
                </td>
            </tr>
        @endforeach
</table>
</div>
@endsection