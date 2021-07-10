<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kho;
use App\Models\SanPham;
use Session;

class KhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->viewprefix='admin.content.kho.';
        $this->viewnamespace='admin/content/kho';
    }
    public function index()
    {
        $kho = Kho::all();
        return view($this->viewprefix.'index', compact('kho'));
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
        $kho = new Kho();
        $this->validate($request, [
            'IdSP' => 'required',
            'TonKho' => 'required',
            'TrangThai'=> 'required',
        ]);
        // $request->image = $this->imageUpload($request);
        $kho->IdSP=$request->IdSP;
        $kho->TonKho=$request->TonKho;
        $kho->TrangThai=$request->TrangThai;
        if($kho->save())
        {
            Session::flash('message', 'successfully!');
        }else
            Session::flash('message', 'Failure!');
        return redirect()->route('kho.index');
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
        $kho= Kho::find($id);//Kho tên model
        $sanpham = SanPham::all();
        return view($this->viewprefix.'edit',$kho,['sanpham'=>$sanpham])->with('kho', $kho);
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
        $kho=Kho::find($id);
        $data=$request->validate([
            'IdSP' => 'required',
            'TonKho'=> 'required',
            'TrangThai'=> 'required',
           
        ]);    
        if($kho->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('kho.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kho=Kho::find($id);
        if( $kho->TrangThai==0){
            $kho->TrangThai=1;
        }else {
            $kho->TrangThai=0;
        }
    
        if($kho->update())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('kho.index');
    }
}
