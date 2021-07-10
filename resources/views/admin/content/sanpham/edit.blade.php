@extends('admin.layout')
@section('content')
<form action="{{route('sanpham.update',$sanpham->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @csrf
            @method('PUT')
  <div class="form-group">
     <label for="tenSP">Tên Sản Phẩm</label>
     <input type="text" class="form-control" name="TenSP" value="{{$sanpham->TenSP}}" />
   </div>
    
   <div class="form-group">
     <label for="HinhAnh">Hình Ảnh</label>
     <div class="form-group">
     <img id="HinhAnh" width="15%" src="{{asset('image/'.$sanpham->HinhAnh)}}" alt="no img" class="img-thumbnail" />
     <input type="file" class="form-control" name="HinhAnh" value="" id="HinhAnh" value="{{$sanpham->HinhAnh}}"/>
   </div>
   <div class="form-group">
                                    
                                    <p>
                                    <label class="custom-file-label" for="ful"><i><u><b>Choose File</b></u></i></label>
                                    </p>
                                </div>
  <div class="form-group">
     <label for="cpu">CPU</label>
     <input type="text" class="form-control" name="CPU" value="{{$sanpham->CPU}}" />
   </div>
   <div class="form-group">
     <label for="Ram">Ram</label>
     <input type="text" class="form-control" name="Ram" value="{{$sanpham->Ram}}" />
   </div>
   <div class="form-group">
     <label for="OCung">Ổ Cứng</label>
     <input type="text" class="form-control" name="OCung" value="{{$sanpham->OCung}}" />
   </div>
   <div class="form-group">
     <label for="ManHinh">Màn Hình</label>
     <input type="text" class="form-control" name="ManHinh" value="{{$sanpham->ManHinh}}" />
   </div>
   <div class="form-group">
     <label for="CardManHinh">Card Màn Hình</label>
     <input type="text" class="form-control" name="CardManHinh" value="{{$sanpham->CardManHinh}}" />
   </div>
   <div class="form-group">
     <label for="CongKetNoi">Cổng Kết Nối</label>
     <input type="text" class="form-control" name="CongKetNoi" value="{{$sanpham->CongKetNoi}}" />
   </div>
   <div class="form-group">
     <label for="HeDieuHanh">Hệ Điều Hành</label>
     <input type="text" class="form-control" name="HeDieuHanh" value="{{$sanpham->HeDieuHanh}}" />
   </div>
   <div class="form-group">
     <label for="ThietKe">Thiết Kế</label>
     <input type="text" class="form-control" name="ThietKe" value="{{$sanpham->ThietKe}}" />
   </div>
   <div class="form-group">
     <label for="KichThuoc">Kích Thước</label>
     <input type="text" class="form-control" name="KichThuoc" value="{{$sanpham->KichThuoc}}" />
   </div>
   <div class="form-group">
     <label for="ThoiDiemRaMat">Thời Điểm Ra Mắt</label>
     <input type="text" class="form-control" name="ThoiDiemRaMat" value="{{$sanpham->ThoiDiemRaMat}}" />
   </div>
   <div class="form-group">
     <label for="Mota">Mô Tả</label>
     <input type="text" class="form-control" name="MoTa" value="{{$sanpham->MoTa}}" />
   </div>
   <div class="form-group">
     <label for="Gia">Giá</label>
     <input type="text" class="form-control" name="Gia" value="{{$sanpham->Gia}}" />
   </div>
   <div class="form-group">
     <label for="NhaCC">Nhà Cung Cấp</label>
     <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="NhaCC" class="form-control" id="exampleInputTitle" placeholder="Title">
                    @foreach($nhacc as $nhaccs)
                        <option value="{{$nhaccs->id}}" {{ $NhaCC == $nhaccs->id ? 'selected="selected"' : '' }} >{{$nhaccs->TenNCC}}</option>
                    @endforeach
                    </select>
   </div>
   <div class="form-group">
     <label for="tenDM">Nhà Cung Cấp</label>
     <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="TenDM" class="form-control" id="exampleInputTitle" placeholder="Title">
                    @foreach($tendm as $tendms)
                        <option value="{{$tendms->id}}" {{ $TenDM == $tendms->id ? 'selected="selected"' : '' }} >{{$tendms->TenDanhMuc}}</option>
                    @endforeach
                    </select>
   </div>
  
  <div class="form-group">
    <label for="trangthai">Trạng Thái</label>
    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" name="TrangThai"  placeholder="Status">
    @if($sanpham->TrangThai==0)
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        @elseif($sanpham->TrangThai==1)
                        <option value="0" >0</option>
                        <option value="1" selected>1</option>
                        @endif
                        
                    </select>
  </div>
   <button type="submit" name="btn_addproduct"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop