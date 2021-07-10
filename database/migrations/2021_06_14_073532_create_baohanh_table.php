<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaohanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baohanh', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IdSP')->unsigned();//khoa ngoai
            $table->string('ThoiGianBH',100);
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
        Schema::dropIfExists('baohanh');
    }
}
