<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use PDF;

class PDFController extends Controller
{
    public function index()
    {
    	//$data = '<h6>Some PDF</h6>';
    	$order = Order::find(24);

    	


    	$pdf = PDF::loadView('pdf.invoice', array('order' => $order));
		//$pdf->loadHTML('<h1>Test</h1>');
		return $pdf->stream();
    }
}
