<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaoHanh extends Model
{
    use HasFactory;
    protected $table='baohanh';
    protected $fillable =[
        'id',
        'IdSP',
        'ThoiGianBH',
        'TrangThai',
        
    ];
    public function SanPham(){
        return $this->belongsTo('App\Models\SanPham', 'IdSP', 'id');
    }
}
