@extends('admin.layout')
@section('content')
<form method="POST" enctype="multipart/form-data" action="{{route('khuyenmai.store')}}">
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
     <label for="khuyenmai">Khuyến Mãi</label>
     <input type="text" class="form-control" name="KhuyenMai" required>
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
 