<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    protected $table='binhluan';
    protected $fillable =[
        'IdSP',
        'IdKH',
        'Ngay',
        'NoiDung',
        'TrangThai',
    ];
    public function SanPham(){
        return $this->belongsTo('App\Models\SanPham', 'IdSP', 'id');
    }
    public function TaiKhoan()
    {
        return $this->belongsTo('App\Models\TaiKhoan','IdKH','id');
    }
}
