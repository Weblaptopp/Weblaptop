<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('HoVaTenND');
            $table->string('UserName');
            $table->string('password');
            $table->string('Email');
            $table->string('DiaChi');
            $table->string('SDT');
            $table->integer('LoaiTK');
            $table->string('AnhDaiDien');
            $table->integer('TrangThai');
            $table->string('code')->nullable();
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
        Schema::dropIfExists('taikhoan');
    }
}
