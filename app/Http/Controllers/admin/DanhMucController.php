<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use Session;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->viewprefix='admin.content.danhmuc.';
        $this->viewnamespace='admin/content/danhmuc';
    }
    public function index()
    {
        $danhmuc = DanhMuc::all();
        return view($this->viewprefix.'index', compact('danhmuc'));
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
        $danhmuc = new DanhMuc();
        $this->validate($request, [
            'TenDanhMuc' => 'required',
            'TrangThai'=> 'required',
        ]);
        // $request->image = $this->imageUpload($request);
        $danhmuc->TenDanhMuc=$request->TenDanhMuc;
        $danhmuc->TrangThai=$request->TrangThai;
        if($danhmuc->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('danhmuc.index');
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
        $danhmuc= DanhMuc::find($id);//DanhMuc tên model
        return view($this->viewprefix.'edit')->with('danhmuc', $danhmuc);
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
        $danhmuc=DanhMuc::find($id);
        $data=$request->validate([
            'TenDanhMuc' => 'required',
            'TrangThai'=> 'required',
           
        ]);    
        if($danhmuc->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('danhmuc.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $danhmuc=DanhMuc::find($id);
        if( $danhmuc->TrangThai==0){
            $danhmuc->TrangThai=1;
        }else {
            $danhmuc->TrangThai=0;
        }
    
        if($danhmuc->update())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('danhmuc.index');
    }
}
