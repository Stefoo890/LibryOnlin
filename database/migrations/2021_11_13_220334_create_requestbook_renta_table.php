<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestbookRentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestbook_rentas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('terms');
            $table->foreign('libraryMemberid')->references('id')->on('LibraryMember')->onDelete('cascade');
            $table->foreign('bookid')->references('id')->on('book')->onDelete('cascade');
            $table->foreign('librariansid')->references('id')->on('librarians')->onDelete('cascade');
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
        Schema::dropIfExists('requestbook_rentas');
    }
}
