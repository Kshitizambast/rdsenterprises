<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable =  ['mihpayid', 'mode', 'status', 'paid_amount', 'error_msg', 'bank_ref_number', 'allowed', 'paid_at'];

    public function order()
    {
    	return $this->belongsTo(Order::class);
    }
}
