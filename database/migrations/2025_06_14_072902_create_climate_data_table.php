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
    Schema::create('climate_data', function (Blueprint $table) {
        $table->id(); // BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY

        $table->string('location', 100); // VARCHAR(100) NOT NULL
        $table->decimal('temperature', 5, 2)->nullable(); // DECIMAL(5,2)
        $table->decimal('rainfall', 5, 2)->nullable(); // DECIMAL(5,2)
        $table->string('weather_condition', 100)->nullable(); // VARCHAR(100)
        $table->dateTime('recorded_at'); // DATETIME NOT NULL
        $table->timestamp('created_at')->useCurrent(); // DEFAULT CURRENT_TIMESTAMP

        $table->index(['location', 'recorded_at'], 'idx_location_recorded_at');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('climate_data');
    }
};
