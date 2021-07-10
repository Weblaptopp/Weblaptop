@extends('admin.layout')
@section('content')
<form action="{{route('chitietdonhang.update',$chitietdonhang->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @csrf
            @method('PUT')
    
    <div class="form-group">
     <label for="MaSP">Mã Sản Phẩm</label>
     <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="MaSP" class="form-control" id="exampleInputTitle" placeholder="Title">
                    @foreach($sanpham as $sanphams)
                        <option value="{{$sanphams->id}}" {{ $MaSP == $sanphams->id ? 'selected="selected"' : '' }} >{{$sanphams->TenSP}}</option>
                    @endforeach
                    </select>
   </div>
   <div class="form-group">
     <label for="SoLuong">Số Lượng</label>
     <input type="text" class="form-control" name="SoLuong" value="{{$chitietdonhang->SoLuong}}" />
   </div>
   <div class="form-group">
     <label for="KhuyenMai">Khuyến Mãi</label>
     <input type="text" class="form-control" name="KhuyenMai" value="{{$chitietdonhang->KhuyenMai}}" />
   </div>
  <div class="form-group">
    <label for="trangthai">Trạng Thái</label>
    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" name="TrangThai"  placeholder="Status">
    @if($chitietdonhang->TrangThai==0)
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        @elseif($chitietdonhang->TrangThai==1)
                        <option value="0" >0</option>
                        <option value="1" selected>1</option>
                        @endif
                        
                    </select>
  </div>

   <button type="submit" name="btn_addproduct"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
 