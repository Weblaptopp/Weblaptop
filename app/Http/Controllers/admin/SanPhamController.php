<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\NhaCungCap;
use App\Models\DanhMuc;
use App\Classes\Helper;
use Session;
use DB;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->viewprefix='admin.content.sanpham.';
        $this->viewnamespace='admin/content/sanpham';
    }
    public function index()
    {
        $sanpham = SanPham::all();
        return view($this->viewprefix.'index', compact('sanpham'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $tendm = DanhMuc::all();
        $nhacc = NhaCungCap::all();
        return view($this->viewprefix.'create',['nhacc'=>$nhacc],['tendm'=>$tendm]);
    }
    public function imageUpload(Request $request){
        if($request->hasFile('HinhAnh')){
            if($request->file('HinhAnh')->isValid()){
                $request->validate(['HinhAnh'=>'required|image|mimes:jpeg,jpg,png|max:2048',]);
                $imageName = time().'.'.$request->HinhAnh->extension();
                $request->HinhAnh->move(public_path('image'),$imageName);
                return $imageName;
            }
        }
        return 'x';
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sanpham = new SanPham;
        $this->validate($request, [
            'TenSP' => 'required',
            'HinhAnh' => 'required',
            'CPU' => 'required',
            'Ram' => 'required',
            'OCung' => 'required',
            'ManHinh' => 'required',
            'CardManHinh' => 'required',
            'CongKetNoi' => 'required',
            'HeDieuHanh'=>'required',
            'ThietKe'=>'required',
            'KichThuoc' => 'required',
            'ThoiDiemRaMat' => 'required',
            'MoTa' => 'required',
            'Gia' => 'required',
            'NhaCC' => 'required',
            'TenDM' => 'required',
            'TrangThai'=>'required',

        ]);
        $sanpham->TenSP=$request->TenSP;
        $sanpham->HinhAnh=$this->imageUpload($request);
        $sanpham->CPU=$request->CPU;
        $sanpham->Ram=$request->Ram;
        $sanpham->OCung=$request->OCung;
        $sanpham->ManHinh=$request->ManHinh;
        $sanpham->CardManHinh=$request->CardManHinh;
        $sanpham->CongKetNoi=$request->CongKetNoi;
        $sanpham->HeDieuHanh=$request->HeDieuHanh;
        $sanpham->ThietKe=$request->ThietKe;
        $sanpham->KichThuoc=$request->KichThuoc;
        $sanpham->ThoiDiemRaMat=$request->ThoiDiemRaMat;
        $sanpham->MoTa=$request->MoTa;
        $sanpham->Gia=$request->Gia;
        $sanpham->NhaCC=$request->NhaCC;
        $sanpham->TenDM=$request->TenDM;
        $sanpham->TrangThai=$request->TrangThai;
       
        if($sanpham->save())
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('sanpham.index');
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
        $sanpham= SanPham::find($id);//Nhacungcap tên model      
        $tendm = DanhMuc::all();
        $nhacc = NhaCungCap::all();
        return view($this->viewprefix.'edit',$sanpham,['nhacc'=>$nhacc,'tendm'=>$tendm])->with('sanpham', $sanpham);
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
        $sanpham = SanPham::find($id);
        $data=$request->validate([
            'TenSP' => 'required',
            'HinhAnh' => 'required',
            'CPU' => 'required',
            'Ram' => 'required',
            'OCung' => 'required',
            'ManHinh' => 'required',
            'CardManHinh' => 'required',
            'CongKetNoi' => 'required',
            'HeDieuHanh'=>'required',
            'ThietKe'=>'required',
            'KichThuoc' => 'required',
            'ThoiDiemRaMat' => 'required',
            'MoTa' => 'required',
            'Gia' => 'required',
            'NhaCC' => 'required',
            'TenDM' => 'required',
            'TrangThai'=>'required',
        ]);    
        
        $data['HinhAnh']=$this->imageUpload($request);
        
       
        //if(Category::create($request->all()))
        if($sanpham->update($data))
        { 
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('sanpham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sanpham=SanPham::find($id);
        if( $sanpham->TrangThai==0){
            $sanpham->TrangThai=1;
        }else {
            $sanpham->TrangThai=0;
        }
    
        if($sanpham->update())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('sanpham.index');
    }
}

  


