<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_items', function (Blueprint $table) {
            $table->increments('id_ri');
            $table->decimal('price_ri',11,2);
            $table->integer('bicycle_id')->unsigned();
            $table->foreign('bicycle_id')
                  ->references('id_bicycle')
                  ->on('bicycles');
            $table->integer('reservation_id')->unsigned();
            $table->foreign('reservation_id')
                  ->references('id_reservation')
                  ->on('reservations')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('reservation_items');
    }
}
