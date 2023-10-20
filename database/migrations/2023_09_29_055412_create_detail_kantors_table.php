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
        Schema::create('detail_kantors', function (Blueprint $table) {
            $table->id();
            $table->string('vertikal_id');
            $table->string('nama_unit');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('situs_web');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_kantors');
    }
};
