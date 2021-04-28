<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Book;
use App\Models\OrderStatus;

class AdminOrderController extends Controller
{
    
	public function edit($id)
	{
		$order = Order::find($id);
		$books = Book::all();
		$order_statues = OrderStatus::all();
		return view('admin.edits.order-edit')->with(['order'=>$order, 'books'=>$books, 'order_statues' => $order_statues]);
	}


    public function update(Request $request, $id)
    {
  		$this->validate($request, [
  			'book_id'         => 'required|numeric',
  			'payble'          => 'required|numeric',
  			'email'	          => 'email',
  			'address'         => 'required|string',
  			'order_status_id' => 'required|numeric',
  		]);

    	Order::where('id', $id)->update([
    			'book_id' => $request['book_id'],
    			'payble'  => $request['payble'],
    			'address' => $request['address'],
    			'order_status_id' => $request['order_status_id'] 
    	]);

    	return redirect('/admin/orders')->with('success', 'Order has been updated');

    }

    public function delete(Request $request)
    {
    	$this->validate($request, ['order_id' => 'required|numeric']);
    	$order = Order::find($request['order_id']);
    	$order->delete();
    	return back()->with('danger', 'Order has been deleted!');
    }
}
