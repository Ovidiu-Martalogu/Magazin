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
        DB::table("orders")->insert(array(
            array("product_id"=>1,
          "quantity"=>2),
          array("product_id"=>2,
          "quantity"=>2),
          array("product_id"=>3,
          "quantity"=>2),
          array("product_id"=>4,
          "quantity"=>2),
          array("product_id"=>5,
          "quantity"=>2),
          array("product_id"=>1,
          "quantity"=>2),
          array("product_id"=>2,
          "quantity"=>2),
          array("product_id"=>3,
          "quantity"=>2),
          array("product_id"=>4,
          "quantity"=>2),
          array("product_id"=>5,
          "quantity"=>2),
          array("product_id"=>1,
          "quantity"=>2),
          array("product_id"=>1,
          "quantity"=>2),
          array("product_id"=>3,
          "quantity"=>2),
          array("product_id"=>5,
          "quantity"=>2),
          array("product_id"=>5,
          "quantity"=>2),
          array("product_id"=>4,
          "quantity"=>2),
          array("product_id"=>4,
          "quantity"=>2),));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
