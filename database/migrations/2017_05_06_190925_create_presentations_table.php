<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentations', function (Blueprint $table) {
            $table->increments('id');
            $table->text('details');
            $table->boolean('students')->nullable();
            $table->boolean('faculty_staff')->nullable();
            $table->boolean('community')->nullable();
            $table->boolean('alumni')->nullable();
            $table->date('presentation_date')->nullable();
            $table->string('area')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('presentations');
    }
}
