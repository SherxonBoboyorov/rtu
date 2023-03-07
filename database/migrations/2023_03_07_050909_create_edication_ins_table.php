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
        Schema::create('edication_ins', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('edicationcategory_id')->nullable()->unsigned();
            $table->foreign('edicationcategory_id')
            ->references('id')
            ->on('edication_categories')
            ->onDelete('cascade');

            $table->string('image');

            $table->string('title_ru');
            $table->string('title_uz');
            $table->string('title_en');

            $table->string('daytime_shalk_now')->nullable();
            $table->string('daytime_shalk_before')->nullable();

            $table->string('evening_shalk_now')->nullable();
            $table->string('evening_shalk_before')->nullable();

            $table->string('external_shalk_now')->nullable();
            $table->string('external_shalk_before')->nullable();

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
        Schema::dropIfExists('edication_ins');
    }
};
