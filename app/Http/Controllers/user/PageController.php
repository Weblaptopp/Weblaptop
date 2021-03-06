<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Section;
use App\Models\TaiKhoan;
use App\Models\SanPham;
use App\Classes\Helper;
use Hash;
use DB;
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
        $sanphammoi=SanPham::inRanDomOrder()
       -> where('Trangthai',1)->where('TenDM',6)
       ->take(3)
       ->get();
        
        $sanphams = SanPham::where('TrangThai',1)->paginate(9);
        if(isset($_GET['sort_by'])){
            $sort_by=$_GET['sort_by'];
            if($sort_by=='giam_dan'){
                $sanphams=DB::table('sanpham')
                ->where('TrangThai',1)
                ->orderBy('Gia', 'desc')
                ->paginate(9)->appends(request()->query());
            
            }
            elseif($sort_by=='tang_dan'){
                $sanphams=DB::table('sanpham')
                ->where('TrangThai',1)
                ->orderBy('Gia', 'asc')
                ->paginate(9)->appends(request()->query());
               
            }
            elseif($sort_by=='pho_bien'){
                $sanphams=DB::table('sanpham')
                ->where('TrangThai',1)
                ->paginate(9)->appends(request()->query());
               
            }
            elseif($sort_by=='kytu_tangdan'){
                $sanphams=DB::table('sanpham')
                ->where('TrangThai',1)
                ->orderBy('TenSP', 'asc')
                ->paginate(9)->appends(request()->query());
               
            }
            elseif($sort_by=='kytu_giamdan'){
                $sanphams=DB::table('sanpham')
                ->where('TrangThai',1)
                ->orderBy('TenSP', 'desc')
                ->paginate(9)->appends(request()->query());
               
            }
           
        }
        else{
                $sort_by1=isset($_GET['sort_by1']);
            if($sort_by1=='hienthi9sp'){
                $sanphams=SanPham::where('TrangThai',1)
                ->take(9)->paginate(9);
            
            
            }
            elseif($sort_by1=='hienthitatca'){
                $sanphams=SanPham::where('TrangThai',1)
                ->paginate(9);
            
            }
        }
        return view($this->viewprefix.'product',compact('sanphams','sanphammoi'));
    }
     //tim kiem san pham
     public function Search(Request $request)
     {
         $kq = SanPham::where('TenSP','like','%'.$request->key.'%')->where('TrangThai',1)->paginate(9);
          return view($this->viewprefix.'search',compact('kq'));
            
         
     }
    
     
    public function single($id)
    {
        $sanpham = SanPham::where('id',$id)->where('TrangThai',1)->get();
        $sanphamlq = SanPham::inRanDomOrder()
        ->where('TrangThai',1)
        ->take(4)
        ->get();
        return view($this->viewprefix.'single',compact('sanpham','sanphamlq'));
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
            'HoVaTenND.required'=>'Vui l??ng nh???p h??? t??n',
            'UserName.required'=>'Vui l??ng nh???p username',
            'Email.required'=>'Vui l??ng nh???p email',
            'Email.Email'=>'Kh??ng ????ng ?????nh d???ng email',
            'Email.unique'=>'Email ???? t???n t???i! Vui l??ng nh???p emal kh??c',
            'password.required'=>'Vui l??ng nh???p m???t kh???u',
            'repassword.required'=>'Vui l??ng x??c nh???n m???t kh???u',
            'repassword.same'=>'X??c nh???n m???t kh???u kh??ng gi???ng nhau',
            'password.min'=>'M???t kh???u ??t nh???t 6 k?? t???'
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
        return redirect()->route('getLogin')->with('status','T???o t??i kho???n th??nh c??ng!');  
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
