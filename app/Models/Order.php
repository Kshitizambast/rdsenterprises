<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

      protected $fillable = ['book_id', 'student_id','address', 'payble', 'paid_amount', 'order_status_id', 'service_fee'];

      public function student()
      {
      	return $this->belongsTo(Student::class);
      }

      public function book()
      {
      	return $this->belongsTo(Book::class);
      }

      public function order_status()
      {
      	return $this->belongsTo(OrderStatus::class);
      }

      public function payment()
      {
      	return $this->belongsTo(Payment::class);
      }
}
