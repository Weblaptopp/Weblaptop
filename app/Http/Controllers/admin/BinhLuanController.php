<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BinhLuan;
use App\Models\TaiKhoan;
use App\Models\SanPham;
use Session;


class BinhLuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->viewprefix='admin.content.binhluan.';
        $this->viewnamespace='admin/content/binhluan';
    }
    public function index()
    {
        $binhluan = BinhLuan::all();
        return view($this->viewprefix.'index', compact('binhluan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taikhoan = TaiKhoan::all();
        $sanpham = SanPham::all();
        return view($this->viewprefix.'create',['taikhoan'=>$taikhoan],['sanpham'=>$sanpham]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $binhluan = new BinhLuan();
        $this->validate($request, [
            'IdSP' => 'required',
            'IdKH' => 'required',
            'Ngay' => 'required',
            'NoiDung' => 'required',
            'TrangThai'=> 'required',
        ]);
        // $request->image = $this->imageUpload($request);
        $binhluan->IdSP=$request->IdSP;
        $binhluan->IdKH=$request->IdKH;
        $binhluan->Ngay=$request->Ngay;
        $binhluan->NoiDung=$request->NoiDung;
        $binhluan->TrangThai=$request->TrangThai;
        if($binhluan->save())
        {
            Session::flash('message', 'successfully!');
        }else
            Session::flash('message', 'Failure!');
        return redirect()->route('binhluan.index');
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
        $binhluan= BinhLuan::find($id);//Kho tên model
        $taikhoan = TaiKhoan::all();
        $sanpham = SanPham::all();
        return view($this->viewprefix.'edit',$binhluan,['taikhoan'=>$taikhoan,'sanpham'=>$sanpham])->with('binhluan', $binhluan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $binhluan=BinhLuan::find($id);
        $data=$request->validate([
            'TrangThai'=> 'required',
           
        ]);    
        if($binhluan->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('binhluan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $binhluan=BinhLuan::find($id);
        if( $binhluan->TrangThai==0){
            $binhluan->TrangThai=1;
        }else {
            $binhluan->TrangThai=0;
        }
    
        if($binhluan->update())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('binhluan.index');
    }
}
