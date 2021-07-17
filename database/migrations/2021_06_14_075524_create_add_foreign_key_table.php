<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Khoa ngoai bang san pham
        Schema::table('sanpham', function (Blueprint $table) {
            $table->foreign('NhaCC')->references('id')->on('nhacungcap');
            $table->foreign('TenDM')->references('id')->on('danhmuc');
        });

        //Khoa ngoai bang don hang
        Schema::table('donhang', function (Blueprint $table) {
            $table->foreign('HoTenKH')->references('id')->on('user');
        });

        //Khoa ngoai bang chi tiet don hang
        Schema::table('chitietdonhang', function (Blueprint $table) {
            $table->foreign('MaSP')->references('id')->on('sanpham');
        });

        //Khoa ngoai bang kho
        Schema::table('kho', function (Blueprint $table) {
            $table->foreign('IdSP')->references('id')->on('sanpham');
        });

        //Khoa ngoai bang binh luan
        Schema::table('binhluan', function (Blueprint $table) {
            $table->foreign('IdSP')->references('id')->on('sanpham');
            $table->foreign('IdKH')->references('id')->on('user');
        });

        //khoa ngoai bang bao hanh
        Schema::table('baohanh', function (Blueprint $table) {
            $table->foreign('IdSP')->references('id')->on('sanpham');
           
        });
         //khoa ngoai bang khuyen mai
         Schema::table('khuyenmai', function (Blueprint $table) {
            $table->foreign('IdSP')->references('id')->on('sanpham');
           
        });
        

         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       //
    }
}
