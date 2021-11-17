<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookRentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_rentas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreign('LibraryMemberId')->references('id')->on('library_members')->onDelete('cascade');
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
        Schema::dropIfExists('book_rentas');
    }
}
