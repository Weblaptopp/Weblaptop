<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use session;
class LoginController extends Controller
{
    //
   
    public function getLogin1()
    {
        if (Auth::check()) {
            return redirect('user/index')->with('status', 'Đăng nhập thành công');
        } else {
            return view('user/pages/login')->with('status', 'Đăng nhập không thành công');;
        }
    }
    public function postLogin1(Request $request)
    {   $login = [
        'Email' => $request->txtEmail,
        'password' => $request->txtMatKhau,
    ];
    
        if (Auth::attempt($login)) {
            if(Auth::User()->LoaiTK=="0")
            { 
            return redirect('user/index')->with('status', 'Đăng nhập thành công');
           } else {
               return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
           }
    }
}
    public function getLogout1(Request $request)
    {
        Auth::logout();
        return view('user.pages.login');
    }
    public function getRegister1()
    {
        return view('user.pages.register');
    }
    public function postRegister1(Request $request)
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
        $user = new User();
        $user->HoVaTenND=$request->HoVaTenND;
        $user->UserName=$request->UserName;
        $user->Email=$request->Email;
        $user->password = Hash::make($request->password);
        $user->DiaChi=$request->DiaChi;
        $user->SDT=$request->SDT;
        $user->LoaiTK="0";
        $user->AnhDaiDien="a.jpg";
        $user->TrangThai=1;
        if($user->save())
        return redirect()->route('getLogin')->with('status','Tạo tài khoản thành công!');  
    }
    
  
   
           
}
