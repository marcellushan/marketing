<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaidAdvertisingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paid_advertisings', function (Blueprint $table) {
            $table->increments('id');
            $table->text("ad_event");
            $table->boolean('students')->nullable();
            $table->boolean('faculty_staff')->nullable();
            $table->boolean('community')->nullable();
            $table->boolean('alumni')->nullable();
            $table->text("purpose")->nullable();
            $table->text("details")->nullable();
            $table->boolean('social_media')->nullable();
            $table->boolean('print')->nullable();
            $table->boolean('billboard')->nullable();
            $table->boolean('digital')->nullable();
            $table->boolean('other')->nullable();
            $table->integer('budget')->nullable();
            $table->integer('clients_id');
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
        Schema::dropIfExists('paid_advertisings');
    }
}
