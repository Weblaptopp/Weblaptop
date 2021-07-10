@extends('admin.layout')
@section('content')
<form method="POST" enctype="multipart/form-data" action="{{route('binhluan.store')}}">
    {{ csrf_field() }}
    
    <div class="form-group">
     <label for="IdSP">Tên Sản Phẩm</label>
     <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="IdSP" class="form-control" id="exampleInputTitle" placeholder="Title">
     @foreach($sanpham as $sanphams)
                        <option value="{{$sanphams->id}}">{{$sanphams->TenSP}}</option>
                    @endforeach
                    
                    </select>            
   </div>
   <div class="form-group">
     <label for="IdKH">Tên Khách Hàng</label>
     <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="IdKH" class="form-control" id="exampleInputTitle" placeholder="Title">
     @foreach($taikhoan as $taikhoans)
                        <option value="{{$taikhoans->id}}">{{$taikhoans->HoVaTenND}}</option>
                    @endforeach
                    
                    </select>            
   </div>
   <div class="form-group">
     <label for="Ngay">Ngày Bình Luận</label>
     <input type="date" class="form-control" name="Ngay" required>
   </div>
   <div class="form-group">
     <label for="NoiDung">Nội Dung</label>
     <input type="text" class="form-control" name="NoiDung" required>
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
 