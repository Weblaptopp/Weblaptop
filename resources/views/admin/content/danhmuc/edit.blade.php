@extends('admin.layout')
@section('content')
<form action="{{route('danhmuc.update',$danhmuc->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @csrf
            @method('PUT')
    
    <div class="form-group">
     <label for="TenDanhMuc">Tên Danh Mục</label>
     <input type="text" class="form-control" name="TenDanhMuc" value="{{$danhmuc->TenDanhMuc}}"/>
   </div>
  <div class="form-group">
    <label for="trangthai">Trạng Thái</label>
    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" name="TrangThai"  placeholder="Status">
    @if($danhmuc->TrangThai==0)
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        @elseif($danhmuc->TrangThai==1)
                        <option value="0" >0</option>
                        <option value="1" selected>1</option>
                        @endif
                        
                    </select>
  </div>

   <button type="submit" name="btn_addproduct"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
 