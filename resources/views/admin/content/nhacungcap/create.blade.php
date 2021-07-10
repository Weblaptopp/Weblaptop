@extends('admin.layout')
@section('content')
<form method="POST" enctype="multipart/form-data" action="{{route('nhacungcap.store')}}">
    {{ csrf_field() }}
    
    <div class="form-group">
     <label for="tenncc">Tên Nhà Cung Cấp</label>
     <input type="text" class="form-control" name="TenNCC" required>
   </div>
   <div class="form-group">
     <label for="diachi">Địa Chỉ</label>
     <input type="text" class="form-control" name="DiaChi" value="" required/>
   </div>
   <div class="form-group">
    <label for="price">Điện Thoại</label>
    <input type="text" class="form-control" name="DienThoai" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control"name="Email" required>
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
 