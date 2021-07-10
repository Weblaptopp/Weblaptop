@extends('admin.layout')
@section('content')
<form method="POST" enctype="multipart/form-data" action="{{route('danhmuc.store')}}">
    {{ csrf_field() }}
    
    <div class="form-group">
     <label for="TenDanhMuc">Tên Danh Mục</label>
     <input type="text" class="form-control" name="TenDanhMuc">
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
 