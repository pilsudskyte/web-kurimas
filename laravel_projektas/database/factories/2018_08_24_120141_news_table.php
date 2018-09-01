<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // 1 parametras lenteles pavadinimas
        /* Visi laukeliu tipai gali buti rasti: 
            https://laravel.com/docs/5.6/migrations#columns
        */
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->longtext('content');
            $table->longtext('description');
            $table->text('image')->nullabe();
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
        Schema::dropIfExists('news');
    }
}
