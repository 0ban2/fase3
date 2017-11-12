<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBicyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bicycles', function (Blueprint $table) {
            $table->increments('id_bicycle');
            $table->string('serie_bicycle', 100)->unique();
            $table->string('image_bicycle', 255);
            $table->string('color_bicycle', 255);
            $table->decimal('price_bicycle', 11, 2);
            $table->string('slug_bicycle')->unique();
            $table->integer('model_id')->unsigned();
            $table->foreign('model_id')
                  ->references('id_model')
                  ->on('models');
            $table->integer('bt_id')->unsigned(); /*tipo de bicicleta*/
            $table->foreign('bt_id')
                  ->references('id_bt')
                  ->on('bicycle_types');
            $table->integer('store_id')->unsigned();
            $table->foreign('store_id')
                  ->references('id_store')
                  ->on('stores');
            $table->integer('bs_id')->unsigned(); /*estado de bicicleta*/
            $table->foreign('bs_id')
                  ->references('id_bs')
                  ->on('bicycle_status');
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
        Schema::dropIfExists('bicycles');
    }
}
