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
        Schema::create('web_projects', function (Blueprint $table) {
            $table->id();
            $table->string('Gambar');
            $table->string('Nama_Aplikasi');
            $table->date('Tanggal_Pembuatan');
            $table->string('Text');
            $table->string('Role');
            $table->string('Demo');
            $table->string('Tech_1')->nullable();
            $table->string('Tech_2')->nullable();
            $table->string('Tech_3')->nullable();
            $table->string('Tech_4')->nullable();
            $table->string('Tech_5')->nullable();
            $table->string('Tech_6')->nullable();
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
        Schema::dropIfExists('web_projects');
    }
};
