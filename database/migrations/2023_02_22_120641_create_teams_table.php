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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('department_id')->nullable()->unsigned();
            $table->foreign('department_id')
            ->references('id')
            ->on('departments')
            ->onDelete('cascade');

            $table->string('image');

            $table->string('name_ru');
            $table->string('name_uz');
            $table->string('name_en');

            $table->string('slug_ru');
            $table->string('slug_uz');
            $table->string('slug_en');

            $table->string('job_title_ru');
            $table->string('job_title_uz');
            $table->string('job_title_en');

            $table->string('reception_days_ru');
            $table->string('reception_days_uz');
            $table->string('reception_days_en');

            $table->string('specialties_ru');
            $table->string('specialties_uz');
            $table->string('specialties_en');

            $table->text('description_ru');
            $table->text('description_uz');
            $table->text('description_en');

            $table->text('meta_title_ru')->nullable();
            $table->text('meta_title_uz')->nullable();
            $table->text('meta_title_en')->nullable();

            $table->text('meta_description_ru')->nullable();
            $table->text('meta_description_uz')->nullable();
            $table->text('meta_description_en')->nullable();

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
        Schema::dropIfExists('teams');
    }
};
