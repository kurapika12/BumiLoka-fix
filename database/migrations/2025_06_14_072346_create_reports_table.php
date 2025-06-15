<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('reports', function (Blueprint $table) {
        $table->id(); // BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
        $table->unsignedBigInteger('user_id')->nullable(); // User yang melapor

        // ENUM untuk kategori
        $table->enum('category', [
            'forest_fire',
            'illegal_logging',
            'flood_drought',
            'waste_disposal'
        ]);

        $table->string('location'); // VARCHAR(255) NOT NULL
        $table->text('description'); // TEXT NOT NULL
        $table->string('photo_url')->nullable(); // URL foto bukti (jika ada)

        // ENUM status dengan default 'pending'
        $table->enum('status', ['pending', 'in_progress', 'resolved'])->default('pending');

        $table->timestamps(); // created_at & updated_at

        // Foreign key user_id
        $table->foreign('user_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
