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
    Schema::create('videos', function (Blueprint $table) {
        $table->id(); // id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
        $table->string('title'); // title VARCHAR(255) NOT NULL
        $table->string('video_url'); // video_url VARCHAR(255) NOT NULL
        $table->text('description')->nullable(); // TEXT, bisa NULL
        $table->unsignedBigInteger('created_by')->nullable(); // BIGINT UNSIGNED
        $table->timestamps(); // created_at & updated_at

        // Foreign Key ke users
        $table->foreign('created_by')
              ->references('id')
              ->on('users')
              ->onDelete('set null');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
