@extends('layouts.admin')
@section('content')
<h2>Your payments (Newest!)</h2>
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th><input type="checkbox" class="selectAll" name="selectAll" value="all"></th>
            <th>Paid Amount</th>
            <th>Payment Mode</th>
            <th>Payment Date</th>
            <th>Msg</th>
            <th>Payment Status</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($payments as $payment)
            <tr>
                <td></td>
                <td>₹{{$payment->paid_amount}}</td>
                <td>{{$payment->mode}}</td>
                <td>{{$payment->created_at}}</td>
                <td>{{$payment->error_msg}}</td>
                <td>
                    @if($payment->status == 'failure')
                    <span class="badge bg-danger">{{$payment->status}}</span>
                    @elseif($payment->status == 'pending')
                     <span class="badge bg-warning">{{$payment->status}}</span>
                    @else
                        <span class="badge bg-success">{{$payment->status}}</span>
                    @endif
                    
                </td>
            </tr>
        @endforeach
</table>
@endsection