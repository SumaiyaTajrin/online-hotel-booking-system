<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packagedetails', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->default(0);
            $table->string('name', 100);
            $table->double('amount',15,2)->default(0.00);
            $table->integer('package_no')->default(0);
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
        Schema::dropIfExists('packagedetails');
    }
}
