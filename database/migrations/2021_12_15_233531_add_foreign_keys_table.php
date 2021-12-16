<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //table cities
        Schema::table('cities', function ($table){
            $table->foreign('country_id')->references('id')->on('countries');
        });

        //table history_humidity
        Schema::table('history_humidity', function ($table){
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Tabla cities
        Schema::table('cities', function ($table) {
            $table->dropForeign(['country_id']);
        });

        //Tabla cities
        Schema::table('history_humidity', function ($table) {
            $table->dropForeign(['city_id']);
        });
    }
}
