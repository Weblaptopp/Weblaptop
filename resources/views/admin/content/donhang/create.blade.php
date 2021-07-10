@extends('admin.layout')
@section('content')
<form method="POST" enctype="multipart/form-data" action="{{route('donhang.store')}}">
    {{ csrf_field() }}
    
    <div class="form-group">
     <label for="IdSP">Tên Khách Hàng</label>
     <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="HoTenKH" class="form-control" id="exampleInputTitle" placeholder="Title">
     @foreach($taikhoan as $taikhoans)
                        <option value="{{$taikhoans->id}}">{{$taikhoans->HoVaTenND}}</option>
                    @endforeach
                    
                    </select>            
   </div>
   <div class="form-group">
     <label for="SDT">Số Điện Thoại </label>
     <input type="text" class="form-control" name="SDT" required>
   </div>
   <div class="form-group">
     <label for="DiaChi">Địa Chỉ</label>
     <input type="text" class="form-control" name="DiaChi" required>
   </div>
   <div class="form-group">
     <label for="Ngay">Ngày Đặt Hàng</label>
     <input type="date" class="form-control" name="Ngay" required>
   </div>
   <div class="form-group">
     <label for="ThanhTien">Thành Tiền</label>
     <input type="text" class="form-control" name="ThanhTien" required>
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
 