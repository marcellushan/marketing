<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('department')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->date('due_date')->nullable();
            $table->text('summary')->nullable();
//            $table->boolean('press_release')->nullable();
//            $table->boolean('design')->nullable();
//            $table->boolean('photo')->nullable();
//            $table->boolean('social_media')->nullable();
//            $table->boolean('paid_advertising')->nullable();
//            $table->boolean('presentation')->nullable();
//            $table->boolean('videography')->nullable();
//            $table->boolean('event_aid')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
