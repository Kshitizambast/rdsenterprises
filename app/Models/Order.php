<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

      protected $fillable = ['book_id', 'student_id','address', 'payble', 'paid_amount', 'order_status_id'];
}
