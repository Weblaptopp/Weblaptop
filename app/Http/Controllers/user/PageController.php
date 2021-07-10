<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Section;
use App\Models\TaiKhoan;
use App\Models\SanPham;
use App\Classes\Helper;
use Hash;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->viewprefix='user.pages.';
        $this->viewnamespace='user/page';
    }
    public function index()
    {
        
        return view($this->viewprefix.'index');
    }
    public function mail()
    {
        return view($this->viewprefix.'mail');
    }
public function checkout()
    {    
        return view($this->viewprefix.'checkout');
    }
    public function product()
    {
        $sanphams = SanPham::where('TrangThai',1)->paginate(9);
       
        return view($this->viewprefix.'product',compact('sanphams'));
    }
     //tim kiem san pham
     public function Search(Request $request)
     {
         $kq = SanPham::where('TenSP','like','%'.$request->key.'%')->where('TrangThai',1)->get();
          return view($this->viewprefix.'search',compact('kq'));
            
         
     }
    
     
    public function single($id)
    {
        $sanpham = SanPham::where('id',$id)->where('TrangThai',1)->get();
        return view($this->viewprefix.'single',compact('sanpham'));
    }
    public function register()
    {
        return view($this->viewprefix.'register');
    }
    public function login()
    {
        return view($this->viewprefix.'login');
    }
    public function postRegister(Request $request)
    {
       
        $this->validate($request,
        [
            'HoVaTenND'=>'required',
            'UserName'=>'required',
            'Email'=>'required|email|unique:user,email',
            'password'=>'required|min:6|max:20',
            'repassword'=>'required|same:password'
        ],
        [
            'HoVaTenND.required'=>'Vui lòng nhập họ tên',
            'UserName.required'=>'Vui lòng nhập username',
            'Email.required'=>'Vui lòng nhập email',
            'Email.Email'=>'Không đúng định dạng email',
            'Email.unique'=>'Email đã tồn tại! Vui lòng nhập emal khác',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'repassword.required'=>'Vui lòng xác nhận mật khẩu',
            'repassword.same'=>'Xác nhận mật khẩu không giống nhau',
            'password.min'=>'Mật khẩu ít nhất 6 kí tự'
        ]);
        $user = new TaiKhoan();
        $user->HoVaTenND=$request->HoVaTenND;
        $user->UserName=$request->UserName;
        $user->Email=$request->Email;
        $user->password = Hash::make($request->password);
        $user->DiaChi=$request->DiaChi;
        $user->SDT=$request->SDT;
        $user->LoaiTK=0;
        $user->AnhDaiDien="a.jpg";
        $user->TrangThai=1;
        if($user->save())
        return redirect()->route('getLogin')->with('status','Tạo tài khoản thành công!');  
    }
    
    public function myAccount()
    {
        if(session()->has('infoUser'))
        {
            $myaccount = session()->get('infoUser');
            
        }
        return view('user/pages/infouser',compact('myaccount'));
    }
   
    
}
