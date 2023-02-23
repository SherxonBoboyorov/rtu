<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('councils', function (Blueprint $table) {
            $table->id();

            $table->string('image');

            $table->string('name_ru');
            $table->string('name_uz');
            $table->string('name_en');

            $table->string('job_title_ru');
            $table->string('job_title_uz');
            $table->string('job_title_en');

            $table->string('phone_number');

            $table->string('reception_days_ru');
            $table->string('reception_days_uz');
            $table->string('reception_days_en');

            $table->string('email');

            $table->text('description_ru');
            $table->text('description_uz');
            $table->text('description_en');
            
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
        Schema::dropIfExists('councils');
    }
};
