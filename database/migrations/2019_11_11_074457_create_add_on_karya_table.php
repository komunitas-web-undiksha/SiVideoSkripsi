<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddOnKaryaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_on_karya', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->string('nim',10);
            $table->string('judul',35);
            $table->enum('jenis', ['musik','video','gambar']);
            $table->string('link',60);
            $table->string('keterangan',100);
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
        Schema::dropIfExists('add_on_karya');
    }
}
