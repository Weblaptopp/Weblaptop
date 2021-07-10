<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChiTietDonHang;
use App\Models\SanPham;
use Session;


class ChiTietDonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->viewprefix='admin.content.chitietdonhang.';
        $this->viewnamespace='admin/content/chitietdonhang';
    }
    public function index()
    {
        $chitietdonhang = ChiTietDonHang::all();
        return view($this->viewprefix.'index', compact('chitietdonhang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sanpham = SanPham::all();
        return view($this->viewprefix.'create',['sanpham'=>$sanpham]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chitietdonhang = new ChiTietDonHang();
        $this->validate($request, [
            'MaSP' => 'required',
            'SoLuong' => 'required',
            'KhuyenMai' => 'required',
            'TrangThai'=> 'required',
        ]);
        // $request->image = $this->imageUpload($request);
        $chitietdonhang->MaSP=$request->MaSP;
        $chitietdonhang->SoLuong=$request->SoLuong;
        $chitietdonhang->KhuyenMai=$request->KhuyenMai;
        $chitietdonhang->TrangThai=$request->TrangThai;
        if($chitietdonhang->save())
        {
            Session::flash('message', 'successfully!');
        }else
            Session::flash('message', 'Failure!');
        return redirect()->route('chitietdonhang.index');
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
        $chitietdonhang= ChiTietDonHang::find($id);//chitietdonhang tên model
        $sanpham = SanPham::all();
        return view($this->viewprefix.'edit',$chitietdonhang,['sanpham'=>$sanpham])->with('chitietdonhang', $chitietdonhang);
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
        $chitietdonhang=ChiTietDonHang::find($id);
        $data=$request->validate([
            'MaSP' => 'required',
            'SoLuong'=> 'required',
            'KhuyenMai'=> 'required',
            'TrangThai'=> 'required',
           
        ]);    
        if($chitietdonhang->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('chitietdonhang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chitietdonhang=ChiTietDonHang::find($id);
        if( $chitietdonhang->TrangThai==0){
            $chitietdonhang->TrangThai=1;
        }else {
            $chitietdonhang->TrangThai=0;
        }
    
        if($chitietdonhang->update())
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('chitietdonhang.index');
    }
}
