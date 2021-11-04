<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelpacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelpacks', function (Blueprint $table) {
            $table->id();
            $table->string("location", 50);
            $table->date('date_start');
            $table->date('date_end');
            $table->float("price", 10, 2)->unsigned();            
            $table->boolean('is_avaiable')->default(1);
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
        Schema::dropIfExists('travelpacks');
    }
}
