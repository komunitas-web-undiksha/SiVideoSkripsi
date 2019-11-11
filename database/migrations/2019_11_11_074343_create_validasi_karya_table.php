<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValidasiKaryaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validasi_karya', function (Blueprint $table) {
            $table->string('nim',10)->primary();
            $table->enum('valid_sound', ['ya','tidak']);
            $table->enum('valid_video', ['ya','tidak']);
            $table->enum('valid_picture', ['ya','tidak']);
            $table->enum('valid_fungsionalitas', ['ya','tidak']);
            $table->dateTime('valid_sound_at');
            $table->dateTime('valid_video_at');
            $table->dateTime('valid_picture_at');
            $table->dateTime('valid_fungsionalitas_at');
            $table->text('detail_riview');
            $table->string('valid_code',50);
            $table->bigInteger('user_id');
            $table->dateTime('created_at');
            $table->foreign('nim')->references('nim')->on('karya')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('validasi_karya');
    }
}
