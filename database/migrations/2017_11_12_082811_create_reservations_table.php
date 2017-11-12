<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id_reservation');
            $table->date('started_at');
            $table->date('finalized_at');
            $table->decimal('subtotal',11,2);
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')
                  ->references('id')
                  ->on('users');
            $table->integer('store_id')->unsigned();
            $table->foreign('store_id')
                  ->references('id_store')
                  ->on('stores');
            $table->integer('rs_id')->unsigned(); /*estado de reserva*/
            $table->foreign('rs_id')
                  ->references('id_rs')
                  ->on('reservation_status');
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
        Schema::dropIfExists('reservations');
    }
}
