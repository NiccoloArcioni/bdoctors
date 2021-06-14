<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertiseDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertise_doctor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('advertise_id');
            $table->foreign('advertise_id')->references('id')->on('advertises');
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('users');
            $table->string('payment_status', 30);
            $table->date('start_ads_date');
            $table->date('end_ads_date');
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
        Schema::dropIfExists('advertise_doctor');
    }
}
