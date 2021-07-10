@extends('admin.layout')
@section('content')
<form action="{{route('baohanh.update',$baohanh->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @csrf
            @method('PUT')
    
    <div class="form-group">
     <label for="IdSP">Tên Sản Phẩm</label>
     <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="IdSP" class="form-control" id="exampleInputTitle" placeholder="Title">
                    @foreach($sanpham as $sanphams)
                        <option value="{{$sanphams->id}}" {{ $IdSP == $sanphams->id ? 'selected="selected"' : '' }} >{{$sanphams->TenSP}}</option>
                    @endforeach
                    </select>
   </div>
   <div class="form-group">
     <label for="ThoiGianBH">Thời Gian Bảo Hành</label>
     <input type="text" class="form-control" name="ThoiGianBH" value="{{$baohanh->ThoiGianBH}}" />
   </div>
   
  <div class="form-group">
    <label for="trangthai">Trạng Thái</label>
    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" name="TrangThai"  placeholder="Status">
    @if($baohanh->TrangThai==0)
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        @elseif($baohanh->TrangThai==1)
                        <option value="0" >0</option>
                        <option value="1" selected>1</option>
                        @endif
                        
                    </select>
  </div>

   <button type="submit" name="btn_addproduct"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
 