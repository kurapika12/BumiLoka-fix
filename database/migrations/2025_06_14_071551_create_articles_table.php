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
    Schema::create('articles', function (Blueprint $table) {
        $table->id(); // BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
        $table->string('title'); // VARCHAR(255) NOT NULL
        $table->text('content'); // TEXT NOT NULL
        $table->string('image_url')->nullable(); // VARCHAR(255), NULLABLE
        $table->unsignedBigInteger('created_by')->nullable(); // BIGINT UNSIGNED, NULLABLE
        $table->timestamps(); // created_at & updated_at

        // Foreign key
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
        Schema::dropIfExists('articles');
    }
};
