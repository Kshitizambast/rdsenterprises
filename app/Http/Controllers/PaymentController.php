<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Payment;
use App\Models\Order;
use App\Models\Student;
use Illuminate\Support\Facades\DB;



class PaymentController extends Controller
{
    public function index($id)
    {

    	$order = Order::find($id);

    	$txnid = $order->id.''.$order->student->admission_number;


    	$string = "7rnFly|{$txnid}|{$order->payble}|{$order->book->title}|{$order->student->student_name}|{$order->student->email}|{$order->book->title}|{$order->student->email}|{$order->student->contact_number}|{$order->address}|{$txnid}||||||pjVQAWpA";
//     	sha526(key|txnid|amount|productinfo|firstname|email|||||||||||
// SALT)
//   	key|txnid|amount|productinfo|firstname|email|udf1|udf2|
//udf3|udf4|udf5||||||SAL
    	$hash = hash('sha512', $string);
		$config =  [
						'key' => '7rnFly',
						'txnid' => $txnid,
						'amount' => $order->payble,
						'productinfo' => $order->book->title,
						'firstname'  => $order->student->student_name,
						'phone'		=> $order->student->contact_number,
						'udf1'		=> $order->book->title,
						'udf2'		=> $order->student->email,
						'udf3'		=> $order->student->contact_number,
						'udf4'		=> $order->address,
						'udf5'		=> $txnid,
						'hash'		=> $hash,
						'email'		=> $order->student->email,
						'surl'		=> 'https://rdsenterprises.online/payment-status',
						'curl'		=> 'https://rdsenterprises.online/payment-status',
						'furl'		=> 'https://rdsenterprises.online/payment-status'
		    		];

		return view('pages.confirmpayment')->with('config', $config);
		//return back()->with('success', 'Payment Successfull');
    }

    public function processPayment(Request $request)
    {

    	$string = "pjVQAWpA|{$request['status']}||||||{$request['udf5']}|{$request['udf4']}|{$request['udf3']}|{$request['udf2']}|{$request['udf1']}|{$request['email']}|{$request['firstname']}|{$request['productinfo']}|{$request['amount']}|{$request['txnid']}|7rnFly";

    	$hash = hash('sha512', $string);

    	$student = Student::where('email', $request['email'])->get();
    	(string) $student[0]->admission_number;

    	$order_id = (int) str_replace($student[0]->admission_number, '', $request['txnid']);
    	$order = Order::find($order_id);

    	$txnid = $request['txnid'];
    	$amount = $request['amount'];

    	//dd($order);
    	
    	$message = "";
    	DB::beginTransaction();
    	try {
    		//$payment_check = Payment::where('mihpayid', $request['mihpayid'])->get();
    		if($hash == $request['hash']){
    			$payment = Payment::create([
			    				'mihpayid' => $request['mihpayid'],
			    				'mode'	   => $request['mode'],
			    				'status'   => $request['status'],
			    				'paid_amount' => $request['amount'],
			    				'error_msg'  => $request['error_Message'],
			    				'bank_ref_number' => $request['bank_ref_number'],
			    				'allowed'		=> true,
			    				'paid_at'	  => date('Y-m-d H:i:s')
			    		]);

	    		if($payment->status == 'failure' or $payment->status == 'pending'){
		    		    Order::find($order_id)->update([
		    				'payment_id'  => $payment->id,
		    				'paid_amount' => $payment->paid_amount,
		    				'fullfilled'  => false
		    			]);
	    			$message .= "Payment failed for amount {$order->paid_amount} with orer id {$txnid}";
	    		}
	    		else {
	    			Order::where('id', $order_id)->update([
		    				'payment_id'  => $payment->id,
		    				'paid_amount' => $payment->paid_amount,
		    				'fullfilled'  => true
		    			]);
	    			$message .= "Payment Successfull";
	    		}
    		}
    		else {
    			$message .= 'Unknown Request!';

    		}
    	} catch (Exception $e) {
    		DB::rollback();
    		throw $e;
    		
    	}
    	DB::commit();
    	return view('pages.test')->with(['message' => $message, 'txnid'=>$txnid, 'amount'=>$amount]);
    }
}
