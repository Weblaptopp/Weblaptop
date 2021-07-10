<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use App\Classes\Helper;
use Session;
use Illuminate\Support\Facades\Hash;
class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->viewprefix='admin.content.taikhoan.';
        $this->viewnamespace='admin/content/taikhoan';
    }
    public function index()
    {
        $taikhoan = TaiKhoan::all();
        return view($this->viewprefix.'index', compact('taikhoan'));
    }
    public function imageUpload(Request $request){
        if($request->hasFile('AnhDaiDien')){
            if($request->file('AnhDaiDien')->isValid()){
                $request->validate(['AnhDaiDien'=>'required|image|mimes:jpeg,jpg,png|max:2048',]);
                $imageName = time().'.'.$request->AnhDaiDien->extension();
                $request->AnhDaiDien->move(public_path('image'),$imageName);
                return $imageName;
            }
        }
        return 'x';
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taikhoan = TaiKhoan::all();
        return view($this->viewprefix.'create',['taikhoan'=>$taikhoan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $taikhoan = new TaiKhoan();
        $this->validate($request, [
            'HoVaTenND' => 'required',
            'UserName' => 'required',
            'password'=> 'required',
            'Email'=> 'required',
            'DiaChi'=> 'required',
            'SDT'=> 'required',
            'LoaiTK'=> 'required',
            'AnhDaiDien'=> 'required',
            'TrangThai'=> 'required',
        ]);
        // $request->image = $this->imageUpload($request);
        $taikhoan->HoVaTenND=$request->HoVaTenND;
        $taikhoan->UserName=$request->UserName;
        $taikhoan->password=Hash::make($request->password);
        $taikhoan->Email=$request->Email;
        $taikhoan->DiaChi=$request->DiaChi;
        $taikhoan->SDT=$request->SDT;
        $taikhoan->LoaiTK=$request->LoaiTK;
        $taikhoan->AnhDaiDien=$this->imageUpload($request);
        $taikhoan->TrangThai=$request->TrangThai;
        if($taikhoan->save())
        {
            Session::flash('message', 'successfully!');
        }else
            Session::flash('message', 'Failure!');
        return redirect()->route('taikhoan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taikhoan= TaiKhoan::find($id);
        return view($this->viewprefix.'edit')->with('taikhoan', $taikhoan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaiKhoan $taikhoan)
    {
        $data=$request->validate([
            'HoVaTenND' => 'required',
            'UserName' => 'required',
            'password'=> 'required',
            'Email'=> 'required',
            'DiaChi'=> 'required',
            'SDT'=> 'required',
            'LoaiTK'=> 'required',
            'AnhDaiDien'=> 'required',
            'TrangThai'=> 'required',
           
        ]);    
        $data['AnhDaiDien']=$this->imageUpload($request);
        if($taikhoan->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('taikhoan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taikhoan=TaiKhoan::find($id);
        if( $taikhoan->TrangThai==0){
            $taikhoan->TrangThai=1;
        }else {
            $taikhoan->TrangThai=0;
        }
    
        if($taikhoan->update())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('taikhoan.index');
    }
}
