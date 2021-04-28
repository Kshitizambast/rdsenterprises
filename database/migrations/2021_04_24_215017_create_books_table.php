<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('language_category_id');
            $table->unsignedBigInteger('class_books_id');
            $table->string('slug')->default(null);
            $table->string('book_image_url');
            $table->text('description');
            $table->float('price');
            $table->boolean('available')->default(true);
            $table->float('discount')->default(0);
            $table->float('discounted_price')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
