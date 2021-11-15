<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objects', function (Blueprint $table) {
            $table->id();
            $table->string("street");
            $table->string("place");
            $table->string("zipcode");
            $table->string("region");
            $table->integer("housenumber");
            $table->integer("rooms");
            $table->integer("bedrooms");
            $table->string("building_date")->nullable();
            $table->string("placement");
            $table->string("surface");
            $table->string("type");
            $table->string("date")->nullable();
            $table->string("sold")->nullable();
            $table->integer("price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objects');
    }
}