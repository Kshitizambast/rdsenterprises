<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'language_category_id', 'class_books_id', 'slug', 'book_image_url', 'description', 'price', 'avialble', 'discount', 'discounted_price'];

    public function order()
    {
    	return $this->hasMany(Order::class);
    }

  	public function class_books()
  	{
  		return $this->belongsTo(ClassBook::class);
  	}
    public function language_category()
    {
    	return $this->belongsTo(LanguageCategory::class);
    }

    public function product_image()
    {
    	return $this->hasOne(ProductImage::class);
    }
}
