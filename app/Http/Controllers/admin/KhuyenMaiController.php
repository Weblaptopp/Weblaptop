<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KhuyenMai;
use App\Models\SanPham;
use Session;

class KhuyenMaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->viewprefix='admin.content.khuyenmai.';
        $this->viewnamespace='admin/content/khuyenmai';
    }
    public function index()
    {
        $khuyenmai = KhuyenMai::all();
        return view($this->viewprefix.'index', compact('khuyenmai'));
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
        $khuyenmai = new KhuyenMai();
        $this->validate($request, [
            'IdSP' => 'required',
            'KhuyenMai' => 'required',
            'TrangThai'=> 'required',
        ]);
        // $request->image = $this->imageUpload($request);
        $khuyenmai->IdSP=$request->IdSP;
        $khuyenmai->KhuyenMai=$request->KhuyenMai;
        $khuyenmai->TrangThai=$request->TrangThai;
        if($khuyenmai->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('khuyenmai.index');
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
        $khuyenmai= KhuyenMai::find($id);//Nhacungcap tên model
        $sanpham = SanPham::all();
        return view($this->viewprefix.'edit',$khuyenmai,['sanpham'=>$sanpham])->with('khuyenmai', $khuyenmai);
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
        $khuyenmai=KhuyenMai::find($id);
        $data=$request->validate([
            'IdSP' => 'required',
            'KhuyenMai'=> 'required',
            'TrangThai'=> 'required',
           
        ]);    
        if($khuyenmai->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('khuyenmai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $khuyenmai=KhuyenMai::find($id);
        if( $khuyenmai->TrangThai==0){
            $khuyenmai->TrangThai=1;
        }else {
            $khuyenmai->TrangThai=0;
        }
    
        if($khuyenmai->update())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('khuyenmai.index');
    }
}
