<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePressReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('press_releases', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('student_feature')->nullable();
            $table->boolean('departmental_news')->nullable();
            $table->boolean('student_news')->nullable();
            $table->boolean('college_news')->nullable();
            $table->boolean('alumni_feature')->nullable();
            $table->boolean('research')->nullable();
            $table->boolean('alumni_news')->nullable();
            $table->boolean('recognition')->nullable();
            $table->boolean('employee_feature')->nullable();
            $table->boolean('award')->nullable();
            $table->boolean('employee_news')->nullable();
            $table->boolean('retirement')->nullable();
            $table->text('significant')->nullable();
            $table->text('professional')->nullable();
            $table->string('promotional')->nullable();
            $table->boolean('students')->nullable();
            $table->boolean('faculty_staff')->nullable();
            $table->boolean('community')->nullable();
            $table->boolean('alumni')->nullable();
            $table->text('quote_names')->nullable();
            $table->text('quote_emails')->nullable();
            $table->text('quote_phones')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('press_releases');
    }
}
