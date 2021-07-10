<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaoHanh;
use App\Models\SanPham;
use Session;

class BaoHanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->viewprefix='admin.content.baohanh.';
        $this->viewnamespace='admin/content/baohanh';
    }
    public function index()
    {
        $baohanh = BaoHanh::all();
        return view($this->viewprefix.'index', compact('baohanh'));
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
        $baohanh = new BaoHanh();
        $this->validate($request, [
            'IdSP' => 'required',
            'ThoiGianBH' => 'required',
            'TrangThai'=> 'required',
        ]);
        // $request->image = $this->imageUpload($request);
        $baohanh->IdSP=$request->IdSP;
        $baohanh->ThoiGianBH=$request->ThoiGianBH;
        $baohanh->TrangThai=$request->TrangThai;
        if($baohanh->save())
        {
            Session::flash('message', 'successfully!');
        }else
            Session::flash('message', 'Failure!');
        return redirect()->route('baohanh.index');
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
        $baohanh= BaoHanh::find($id);//Bao Hanh tên model
        $sanpham = SanPham::all();
        return view($this->viewprefix.'edit',$baohanh,['sanpham'=>$sanpham])->with('baohanh', $baohanh);
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
        $baohanh=BaoHanh::find($id);
        $data=$request->validate([
            'IdSP' => 'required',
            'ThoiGianBH'=> 'required',
            'TrangThai'=> 'required',
           
        ]);    
        if($baohanh->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('baohanh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $baohanh=BaoHanh::find($id);
        if( $baohanh->TrangThai==0){
            $baohanh->TrangThai=1;
        }else {
            $baohanh->TrangThai=0;
        }
    
        if($baohanh->update())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('baohanh.index');
    }
}
