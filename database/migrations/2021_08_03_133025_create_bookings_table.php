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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('room_id', 100);
            $table->string('user_id', 100);
            $table->string('roomtype_id', 100);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('check_in_date');
            $table->string('check_out_date');
            $table->string('type',40)->nullable();
            $table->string('no_of_guest');
            $table->string('room_quantity');
            $table->string('contact_no');
            $table->string('address');
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
