<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DonHang;
use App\Models\User;
use Session;


class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->viewprefix='admin.content.donhang.';
        $this->viewnamespace='admin/content/donhang';
    }
    public function index()
    {
        $donhang = DonHang::all();
        return view($this->viewprefix.'index', compact('donhang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taikhoan = User::all();
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
        $donhang = new DonHang();
        $this->validate($request, [
            'HoTenKH' => 'required',
            'SDT' => 'required',
            'DiaChi' => 'required',
            'Ngay' => 'required',
            'ThanhTien' => 'required',
            'TrangThai'=> 'required',
        ]);
        // $request->image = $this->imageUpload($request);
        $donhang->HoTenKH=$request->HoTenKH;
        $donhang->SDT=$request->SDT;
        $donhang->DiaChi=$request->DiaChi;
        $donhang->Ngay=$request->Ngay;
        $donhang->ThanhTien=$request->ThanhTien;
        $donhang->TrangThai=$request->TrangThai;
        if($donhang->save())
        {
            Session::flash('message', 'successfully!');
        }else
            Session::flash('message', 'Failure!');
        return redirect()->route('donhang.index');
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
        $donhang= DonHang::find($id);//Kho tên model
        $taikhoan = User::all();
        return view($this->viewprefix.'edit',$donhang,['taikhoan'=>$taikhoan])->with('donhang', $donhang);
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
        $donhang=DonHang::find($id);
        $data=$request->validate([
            'TrangThai'=> 'required',
           
        ]);    
        if($donhang->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('donhang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donhang=DonHang::find($id);
        if( $donhang->TrangThai==0){
            $donhang->TrangThai=1;
        }else {
            $donhang->TrangThai=0;
        }
    
        if($donhang->update())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('donhang.index');
    }
}
