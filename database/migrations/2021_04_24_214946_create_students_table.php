<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('admission_number')->unique();
            $table->string('email')->unique();
            $table->string('student_name');
            $table->string('parents_name');
            $table->unsignedInteger('class_books_id');
            $table->bigInteger('contact_number');
            $table->bigInteger('alternet_contact_number')->default(null);
            $table->text('address');
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
        Schema::dropIfExists('students');
    }
}
