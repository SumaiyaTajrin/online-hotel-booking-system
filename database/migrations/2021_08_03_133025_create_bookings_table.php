<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('room_no')->default(0);
            $table->integer('guest_no');
            $table->integer('customer_id')->default(0);
            $table->string('status', 10)->default('active');
            $table->integer('payment_id')->default(0);
            $table->integer('package_id');
            $table->integer('check_in_time');
            $table->integer('check_out_time');

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
        Schema::dropIfExists('bookings');
    }
}
