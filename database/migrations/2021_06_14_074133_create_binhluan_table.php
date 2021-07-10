<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinhluanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binhluan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IdSP')->unsigned();//khoa ngoai
            $table->integer('IdKH')->unsigned();//khoa ngoai
            $table->datetime('Ngay');
            $table->string('NoiDung');
            $table->integer('TrangThai');
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
        Schema::dropIfExists('binhluan');
    }
}
