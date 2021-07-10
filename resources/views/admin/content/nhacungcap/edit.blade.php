@extends('admin.layout')
@section('content')
<form action="{{route('nhacungcap.update',$nhacungcap->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @csrf
            @method('PUT')
    
    <div class="form-group">
     <label for="tenncc">Tên Nhà Cung Cấp</label>
     <input type="text" class="form-control" name="TenNCC" value="{{$nhacungcap->TenNCC}}"/>
   </div>
   <div class="form-group">
     <label for="diachi">Địa Chỉ</label>
     <input type="text" class="form-control" name="DiaChi" value="{{$nhacungcap->DiaChi}}" />
   </div>
   <div class="form-group">
    <label for="price">Điện Thoại</label>
    <input type="text" class="form-control" name="DienThoai" value="{{$nhacungcap->DienThoai}}"/>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="Email" value="{{$nhacungcap->Email}}"/>
  </div>
  <div class="form-group">
    <label for="trangthai">Trạng Thái</label>
    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" name="TrangThai"  placeholder="Status">
    @if($nhacungcap->TrangThai==0)
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        @elseif($nhacungcap->TrangThai==1)
                        <option value="0" >0</option>
                        <option value="1" selected>1</option>
                        @endif
                        
                    </select>
  </div>

   <button type="submit" name="btn_addproduct"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
 