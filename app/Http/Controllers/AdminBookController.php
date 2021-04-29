<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassBook;
use App\Models\LanguageCategory;
use App\Models\Book;
use App\Models\Order;

class AdminBookController extends Controller
{
    public function addBook()
    {
    	$class_books = ClassBook::all();
    	$language_categories = LanguageCategory::all();
    	return view('admin.create.create-book')->with(['class_books' => $class_books, 'language_categories' => $language_categories]);
    }

    public function uploadBook(Request $request)
    {
    	$this->validate($request, [
    		'title'                 => 'required|string|max:255',
    		'language_category_id'  => 'required|numeric',
    		'class_books_id'         => 'required|numeric',
    		'book_image_url'        => 'required|string|max:255',
    		'description'           => 'required|string|max:1255',
    		'price'                 =>'required|numeric',
    		'available'             =>  'required|numeric',
    		'slug'					=> 'required|string'
    	]);

    	Book::create([
    		'title'                 => $request['title'],
    		'language_category_id'  => $request['language_category_id'],
    		'class_books_id'         => $request['class_books_id'],
    		'book_image_url'        => $request['book_image_url'],
    		'description'           => $request['description'],
    		'price'                 => $request['price'],
    		'available'             => $request['available'],
    		'slug'					=> $request['slug']
    	]);

    	return redirect('/admin/books')->with('success', 'Book has been uploaded');
    }


    public function editBook($id)
    {
    	$class_books = ClassBook::all();
    	$language_categories = LanguageCategory::all();
    	$book = Book::find($id);
    	return view('admin.edits.book-edit')->with(['class_books' => $class_books, 'language_categories' => $language_categories, 'book' =>$book]);
    }

    public function updateBook(Request $request, $id)
    {
    	$this->validate($request, [
    		'title'                 => 'required|string|max:255',
    		'language_category_id'  => 'required|numeric',
    		'class_books_id'         => 'required|numeric',
    		'book_image_url'        => 'required|string|max:255',
    		'description'           => 'required|string|max:1255',
    		'price'                 =>'required|numeric',
    		'available'             =>  'required|numeric',
    	]);

    	Book::where('id', $id)->update([
		    		'title'                 => $request['title'],
		    		'language_category_id'  => $request['language_category_id'],
		    		'class_books_id'         => $request['class_books_id'],
		    		'book_image_url'        => $request['book_image_url'],
		    		'description'           => $request['description'],
		    		'price'                 => $request['price'],
		    		'available'             => $request['available'],
    	]);

    	return redirect('/admin/books')->with('success', 'Book has been uploaded');
    }

    public function deleteBook(Request $request)
    {
    	$this->validate($request, ['book_id' => 'required|numeric']);
    	$book = Book::find($request['book_id']);
    	if($book->order != null)
    		$order = Order::where('book_id', $book->id)->delete();
    	$book->delete();
    	return back()->with('danger', 'Book has been deleted');
    }

}
