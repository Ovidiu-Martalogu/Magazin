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
        DB::table("products")->insert(array(
            array("product_name"=>"Duster ESSENTIAL",
          "description"=>"motor:Eco_G_100_4x2,GPL", "color"=>"white",
          "image"=>"Duster_white.jpg",
          "price"=>22000, "discount"=>10.3),
          array("product_name"=>"Duster EXPRESSION",
          "description"=>"motor:Tce130_4x2,Mild Hibrid", "color"=>"green",
          "image"=>"images/Duster_green.jpg",
          "price"=>23800, "discount"=>5.3),
          array("product_name"=>"Duster JOURNEY",
          "description"=>"motor:Tce130_4x4,Mild Hibrid", "color"=>"terracota_brun", 
          "image"=>"images/Duster_terracota_brun.jpg",
          "price"=>26000, "discount"=>5.3),
          array("product_name"=>"Duster JOURNEY",
          "description"=>"motor:HEV140,full hibrid", "color"=>"sandstone",
          "image"=>"images/Duster_sandstone.jpg",
          "price"=>27350, "discount"=>10.3),
          array("product_name"=>"JOGGER ESSENTIAL",
          "description"=>"numar locuri:5 locuri)", "color"=>"green",
          "image"=>"images/DusterJogger_green.jpg",
          "price"=>17900, "discount"=>5.3),
          ));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
