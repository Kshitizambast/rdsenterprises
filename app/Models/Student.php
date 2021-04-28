<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['student_name', 'parents_name', 'admission_number', 'address', 'contact_number' , 'class_books_id', 'alternet_number', 'email'];

    public function order()
    {
    	return $this->hasMany(Order::class);
    }

    public function class_books()
    {
    	return  $this->belongsTo(ClassBook::class);
    }
}
