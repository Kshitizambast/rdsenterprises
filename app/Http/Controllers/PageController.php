<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\ClassBook;
use App\Models\Order;
use App\Models\Student;
use App\Events\Illuminate\Auth\Events\OrderPlaced;

class PageController extends Controller
{
    //
    public function index()
    {
    	$books = Book::all();
    	$classes = ClassBook::all();
    	
    	return view('pages.index')->with(['books'=>$books, 'classes'=>$classes]);
    }

    public function viewAndCheckout($id)
    {
    	$book = Book::find($id);
    	$classes = ClassBook::all();

    	return view('pages.viewandcheckout')->with(['book'=>$book, 'classes'=>$classes]);;
    }

    public function booksBasedOnClass($id)
    {
    	$books = Book::where('class_books_id', $id)->get();	
    	$classes = ClassBook::all();

    	return view('pages.books-on-class')->with(['books'=>$books, 'classes'=>$classes]);

    }

    public function checkout(Request $request)
    {

    	$this->validate($request, [
    		'student_name' => 'required|string',
    		'parents_name' => 'required|string',
    		'admission_number' => 'required|numeric',
    		'email'			=> 'required|email',
    		'address'		=> 'required|string|',
    		'contact_number' => 'required|numeric',
    		'alternet_number' => 'numeric',
    		'class_books_id'  =>  'required|numeric',
    		'book_id'		  => 'required|numeric'
    	]);


    	$checkStudent = Student::where([
    									'admission_number' => $request['admission_number'],
    									'email'			   => $request['email']
    								])
    			 				 ->first();
		 $book = Book::find($request['book_id']);

		 $service_fee = $book->price * 0.02;

		 $payble = $book->price + $service_fee;


		 //dd($request);

	    if($checkStudent == null){
	    	
	    	$this->validate($request, [
	    						'email' => 'required|email|unique:students',
	    						'admission_number' => 'required|numeric|unique:students'
	    						]);
	    	$student = Student::create([
			    		'student_name' => $request['student_name'],
			    		'parents_name' => $request['parents_name'],
			    		'admission_number' => $request['admission_number'],
			    		'email' => $request['email'],	
			    		'address' => $request['address'],
			    		'contact_number' => $request['contact_number'],
			    		'alternet_number' => $request['alternet_number'],
			    		'class_books_id' => $request['class_books_id']
			    	]);	

	    	$order = Order::create([
			    		'book_id' => $request['book_id'],
			    		'student_id' => $student->id,
			    		'address'	 => $request['address'],
			    		'service_fee'=> $service_fee,
			    		'payble'	=>  $payble,
			    		'order_status_id' => 1
			    	]);
	    } 
	    else{
	    	$order = Order::create([
			    		'book_id' => $request['book_id'],
			    		'student_id' => $checkStudent->id,
			    		'address'	 => $request['address'],
			    		'service_fee'=> $service_fee,
			    		'payble'	=>  $payble,
			    		'order_status_id' => 1
			    	]);
	    }


	    return redirect('pay-bill/'.$order->id);

    	//Create the student if not exist already
    	//Create Order with status placed.
    	//Payment integration (Transaction basis).

    	//return home with success message. 

    }

    public function terms()
    {
    	# code...
    	return view('pages.terms');
    }
    public function privacy()
    {
    	# code...
    	return view('pages.privacy');

    }
    public function refund()
    {
    	return view('pages.refund');

    }
}
