<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nhacungcap;
use Session;

class NhaCungCapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->viewprefix='admin.content.nhacungcap.';
        $this->viewnamespace='admin/content/nhacungcap';
    }
    public function index()
    {
        $nhacungcap = NhaCungCap::all();
        return view($this->viewprefix.'index', compact('nhacungcap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->viewprefix.'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nhacungcap = new NhaCungCap();
        $this->validate($request, [
            'TenNCC' => 'required',
            'DiaChi'=> 'required',
            'DienThoai'=> 'required',
            'Email'=> 'required',
            'TrangThai'=> 'required',
        ]);
        // $request->image = $this->imageUpload($request);
        $nhacungcap->TenNCC=$request->TenNCC;
        $nhacungcap->DiaChi=$request->DiaChi;
        $nhacungcap->DienThoai=$request->DienThoai;
        $nhacungcap->Email=$request->Email;
        $nhacungcap->TrangThai=$request->TrangThai;
        if($nhacungcap->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('nhacungcap.index');
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
        $nhacungcap= NhaCungCap::find($id);//Nhacungcap tên model
        return view($this->viewprefix.'edit')->with('nhacungcap', $nhacungcap);
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
        $nhacungcap=NhaCungCap::find($id);
        $data=$request->validate([
            'TenNCC' => 'required',
            'DiaChi'=> 'required',
            'DienThoai'=> 'required',
            'Email'=> 'required',
            'TrangThai'=> 'required',
           
        ]);    
        if($nhacungcap->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('nhacungcap.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nhacungcap=NhaCungCap::find($id);
        if( $nhacungcap->TrangThai==0){
            $nhacungcap->TrangThai=1;
        }else {
            $nhacungcap->TrangThai=0;
        }
    
        if($nhacungcap->update())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('nhacungcap.index');
    }
}
