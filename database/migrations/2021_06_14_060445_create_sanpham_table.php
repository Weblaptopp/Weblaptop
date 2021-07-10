<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenSP',100);
            $table->string('HinhAnh',100);
            $table->string('CPU',100);
            $table->string('Ram',100);
            $table->string('OCung',100);
            $table->float('ManHinh');
            $table->string('CardManHinh',100);
            $table->string('CongKetNoi',100);
            $table->string('HeDieuHanh',100);
            $table->string('ThietKe',100);
            $table->string('KichThuoc',100);
            $table->integer('ThoiDiemRaMat');
            $table->string('MoTa',100);
            $table->string('MoTa2')->nullable();
            $table->float('Gia');
            $table->float('GiaCu')->nullable();
            $table->integer('NhaCC')->unsigned();//khoa ngoai
            $table->integer('TenDM')->unsigned();//khoa ngoai
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
        Schema::dropIfExists('sanpham');
    }
}
