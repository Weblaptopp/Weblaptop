<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    use HasFactory;
    protected $table='khuyenmai';
    protected $fillable =[
        'id',
        'IdSP',
        'KhuyenMai',
        'TrangThai',
        
    ];
    public function SanPham(){
        return $this->belongsTo('App\Models\SanPham', 'IdSP', 'id');
    }
}
