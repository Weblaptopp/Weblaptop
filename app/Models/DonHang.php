<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;
    protected $table='donhang';
    protected $fillable =[
        'HoTenKH',
        'SDT',
        'Dchi',
        'Ngay',
        'ThanhTien',
        'TrangThai',
    ];
    public function TaiKhoan()
    {
        return $this->belongsTo('App\Models\TaiKhoan','HoTenKH','id');
    }
}
