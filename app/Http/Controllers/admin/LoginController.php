<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;

class LoginController extends Controller
{
    public function __construct()
    {
        
    }
    public function getLogin()
    {
        if (Auth::check()) {
            return redirect('admin/dashboard');
        } else {
            return view('admin.login');
        }
    }
    public function postLogin(request $request)
    {   
        $login = [
            'Email' => $request->txtEmail,
            'password' => $request->txtMatKhau,
        ];
      
        if (Auth::attempt($login)) {
         return redirect('admin/dashboard');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return view('admin.login');
    }
}
?>