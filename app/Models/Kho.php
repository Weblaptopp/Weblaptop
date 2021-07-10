<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kho extends Model
{
    use HasFactory;
    protected $table='kho';
    protected $fillable =[
        'id',
        'IdSP',
        'TonKho',
        'TrangThai'
    ];
    public function SanPham(){
        return $this->belongsTo('App\Models\SanPham', 'IdSP', 'id');
    }
}
