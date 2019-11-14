<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karya', function (Blueprint $table) {
            $table->string('nim',10)->primary();
            $table->string('judul',50);
            $table->string('directory_karya',50);
            $table->string('directory_trailer',50);
            $table->string('directory_karya_edit',50)->nullable();
            $table->enum('jenis', ['game','video','aplikasi']);
            $table->enum('haki', ['ya','tidak']);
            $table->enum('do_haki', ['ya','tidak']);
            $table->enum('publish', ['ya','tidak','hanya_trailer']);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->foreign('nim')->references('nim')->on('mahasiswa')
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
        Schema::dropIfExists('karya');
    }
}
