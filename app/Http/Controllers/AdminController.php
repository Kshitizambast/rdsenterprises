<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Student;
use App\Models\Book;
use App\Models\Payment;

class AdminController extends Controller
{
    //
    public function index()
    {
    	$orders = Order::all();
    	//dd($orders);
    	return view('admin.index')->with('orders', $orders);
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
}
