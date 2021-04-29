<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Student;
use App\Models\Book;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index()
    {
    	$orders = Order::all();
    	$payments = Payment::all();
	//dd($orders);
    	return view('admin.index')->with(['orders'=>$orders, 'payments'=>$payments]);
    }

    public function students()
    {
    	$students = Student::all();
    	return view('admin.students')->with('students', $students);
    }

    public function orders()
    {
    	$orders = Order::all();
    	//dd($orders);
    	return view('admin.orders')->with('orders', $orders);
    }

    public function books()
    {
    	$books = Book::all();
    	//dd($orders);
    	return view('admin.books')->with('books', $books);
    }

    public function payments()
    {
    	$payments = Payment::all();
    	//dd($orders);
    	return view('admin.payment')->with('payments', $payments);
    }

    public function adminProfile()
    {
    	return view('admin.profile');
    }

    public function updateUser(Request $request)
    {
    	$this->validate($request, [
    		 'name' => 'required|min:4',
             'email' => 'required|email',
    	]);

    	User::find(auth()->user()->id)->update([
    		'name' => $request['name'],
    		'email'=> $request['email']
    	]);

    	return back()->with('success', 'Profile has been updated');
    }

    public function updateProfile(Request $request)
    {
    	$this->validate($request, [
    		'password'     => 'required|min:8',
    		'new_password' => 'required|confirmed|min:8'
    	]);

    	if(Hash::check($request['password'], auth()->user()->password)){
    		User::find(auth()->user()->id)
    			  ->update([
    			  		'password' => Hash::make($request['new_password'])
    			  ]);
		    return back()->with('success', 'Profile has been updated');
    	}
    	return back()->with('danger', 'Something went wrong');
    }
}
