<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Authenticatable
{
    use HasFactory;
    protected $table='taikhoan';
    protected $fillable =[
        'HoVaTenND',
        'UserName',
        'password',
        'Email',
        'DiaChi',
        'SDT',
        'LoaiTK',
        'AnhDaiDien',
        'TrangThai',
        'code',
    ];
/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function AauthAcessToken(){
        return $this->hasMany('\App\Models\OauthAccessToken');
    }
}