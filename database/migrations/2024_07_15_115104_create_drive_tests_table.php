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
        Schema::create('drive_tests', function (Blueprint $table) {
            $table->id("drive_id");
            $table->string('name');
            $table->string('desired_period');
            $table->unsignedBigInteger("product_id");
            $table->foreign("product_id")->references("id")->on("products");
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drive_tests');
    }
};
