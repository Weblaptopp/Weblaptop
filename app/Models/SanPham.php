<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table='sanpham';
    protected $fillable = [
        'id',
        'TenSP',
        'HinhAnh',
        'CPU',
        'Ram',
        'OCung',
        'ManHinh',
        'CardManHinh',
        'CongKetNoi',
        'HeDieuHanh',
        'ThietKe',
        'TrangThai',
        'KichThuoc',
        'ThoiDiemRaMat',
        'MoTa',
        'MoTa2',
        'Gia',
        'GiaCu',
        'NhaCC',
        'TenDM',
        'TrangThai',

    ];
    public function NhaCungCap()
    {
        return $this->belongsTo('App\Models\NhaCungCap','NhaCC','id');
    }
    public function TenDanhMuc()
    {
        return $this->belongsTo('App\Models\DanhMuc','TenDM','id');
    }
}
