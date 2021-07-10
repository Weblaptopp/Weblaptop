@extends('admin.layout')
@section('content')
<form method="POST" enctype="multipart/form-data" action="{{route('sanpham.store')}}">
    {{ csrf_field() }}
    <div class="form-group">
     <label for="TenSP">Tên Sản Phẩm</label>
     <input type="text" class="form-control" name="TenSP"  required>
   </div>
   <label for="HinhAnh">Hình Ảnh</label>
   <div class="form-group">
     <img id="HinhAnh" width="15%" hight="10%" src="{{asset('image/noimage.jpg')}}" alt="no img" class="img-thumbnail" />
     <input type="file" class="form-control" name="HinhAnh" value="" id="HinhAnh"/>
   </div>
   <div class="form-group">
     <label for="CPU">CPU</label>
     <input type="text" class="form-control" name="CPU" required>
   </div>
   <div class="form-group">
     <label for="Ram">Ram</label>
     <input type="text" class="form-control" name="Ram" required>
   </div>
  
   <div class="form-group">
    <label for="OCung">Ổ Cứng</label>
    <input type="text" class="form-control" name="OCung" required>
  </div>
  <div class="form-group">
    <label for="ManHinh">Màn Hình</label>
    <input type="text" class="form-control" name="ManHinh" required>
  </div>
  <div class="form-group">
    <label for="CardManHinh">Card Màn Hình</label>
    <input type="text" class="form-control" name="CardManHinh" required>
  </div>
  <div class="form-group">
    <label for="CongKetNoi">Cổng Kết Nối</label>
    <input type="text" class="form-control" name="CongKetNoi" required>
  </div>
  <div class="form-group">
    <label for="HeDieuHanh">Hệ Điều Hành</label>
    <input type="text" class="form-control" name="HeDieuHanh" required>
  </div>
  <div class="form-group">
    <label for="ThietKe">Thiết Kế</label>
    <input type="text" class="form-control" name="ThietKe" required>
  </div>
  <div class="form-group">
    <label for="KichThuoc">Kích Thước</label>
    <input type="text" class="form-control" name="KichThuoc" required>
  </div>
  <div class="form-group">
    <label for="ThoiDiemRaMat">Thời Điểm Ra Mắt</label>
    <input type="text" class="form-control" name="ThoiDiemRaMat" required>
  </div>
  <div class="form-group">
    <label for="MoTa">Mô Tả</label>
    <input type="text" class="form-control" name="MoTa" required>
  </div>
  <div class="form-group">
    <label for="Gia">Giá</label>
    <input type="text" class="form-control" name="Gia" required>
  </div>
  <div class="form-group">
     <label for="NhaCC">Nhà Cung Cấp</label>
     <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="NhaCC" class="form-control" id="exampleInputTitle" placeholder="Title">
     @foreach($nhacc as $nhaccs)
                        <option value="{{$nhaccs->id}}">{{$nhaccs->TenNCC}}</option>
                    @endforeach
     </select>            
   </div>
   <div class="form-group">
     <label for="TenDM">Tên Danh Mục</label>
     <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="TenDM" class="form-control" id="exampleInputTitle" placeholder="Title">
     @foreach($tendm as $tendms)
                        <option value="{{$tendms->id}}">{{$tendms->TenDanhMuc}}</option>
                    @endforeach
       </select>            
   </div>
  <div class="form-group">
    <label for="trangthai">Trạng Thái</label>
    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" name="TrangThai"  placeholder="Status">
                        <option value="0">0</option>
                        <option value="1">1</option>
    </select>
  </div>
   <button type="submit" name="btn_addproduct"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
 