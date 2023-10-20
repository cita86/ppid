<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('halamanstatis', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('judul');
            $table->string('uraian_1')->nullable();
            $table->string('uraian_2')->nullable();
            $table->string('nama_file_1')->nullable();
            $table->string('file_1')->nullable();
            $table->string('nama_file_2')->nullable();
            $table->string('file_2')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('halamanstatiss');
    }
};
