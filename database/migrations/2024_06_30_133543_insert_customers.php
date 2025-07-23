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
        DB::table("customers")->insert(array(
            array("FirstName"=>"Marian",
          "LastName"=>"Popescu", "Adress"=>"Bacau, Strada Rebublicii,Nr.26",
          "Phone"=>"0712345679"),
          array("FirstName"=>"Ionut",
          "LastName"=>"Voicu", "Adress"=>"Pitesti, Strada Eroilor,Nr.6",
          "Phone"=>"0712345688"),
          array("FirstName"=>"Cristi",
          "LastName"=>"Albu", "Adress"=>"Pitesti, Strada Bratianu,Nr.12",
          "Phone"=>"0722345678"),
          array("FirstName"=>"David",
          "LastName"=>"Buscu", "Adress"=>"Bacau, Strada Victoriei,Nr.5",
          "Phone"=>"0732345678"),
          array("FirstName"=>"Natalia",
          "LastName"=>"Maria", "Adress"=>"Slatina, Strada 1 Mai,Nr.7",
          "Phone"=>"0752345678"),
          array("FirstName"=>"George",
          "LastName"=>"Ghinea", "Adress"=>"Slatina, Strada Pietei,Nr.226",
          "Phone"=>"0762345678"),
          array("FirstName"=>"Seby",
          "LastName"=>"Ionescu", "Adress"=>"Pitesti, Strada Mihoveanu,Nr.15",
          "Phone"=>"0712565678"),
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
