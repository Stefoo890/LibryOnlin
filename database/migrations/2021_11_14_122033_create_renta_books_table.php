<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentaBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renta_books', function (Blueprint $table) 
        {
            $table->unsignedInteger('libraryMemberid');
            
            $table->id();
            $table->timestamps();
            $table->foreign('libraryMemberid')->references('id')->on('LibraryMember')->onDelete('cascade');
              $table->foreign('bookid')->references('id')->on('book')->onDelete('cascade');
             $table->foreign('librariansid')->references('id')->on('librarians')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renta_books');
    }
}
