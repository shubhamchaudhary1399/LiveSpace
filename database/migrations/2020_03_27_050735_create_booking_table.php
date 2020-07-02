<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('pg_name');
            $table->string('payment_status')->default('pending');
            $table->string('total_amt');
            $table->string('special_requirement')->default('NULL');
            $table->string('name');
            $table->string('contact');
            $table->string('email');
            $table->string('add_line1');
            $table->string('add_line2')->default('NULL');
            $table->string('zip');
            $table->string('city');
            $table->string('state');
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
        Schema::dropIfExists('booking');
    }
}
