<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;
    protected $table='chitietdonhang';
    protected $fillable =[
        'id',
        'MaSP',
        'SoLuong',
        'KhuyenMai',
        'TrangThai',
    ];
    public function SanPham(){
        return $this->belongsTo('App\Models\SanPham', 'MaSP', 'id');
    }
}
