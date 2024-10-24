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
            $table->id(); // Primary key
            $table->string('title'); // Judul buku
            $table->string('author'); // Penulis buku
            $table->integer('year'); // Tahun terbit
            $table->text('description')->nullable(); // Deskripsi (opsional)
            $table->timestamps(); // Kolom created_at & updated_at otomatis
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
