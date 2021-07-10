@extends('admin.layout')
@section('content')
<form action="{{route('taikhoan.update',$taikhoan->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @csrf
            @method('PUT')
    
    <div class="form-group">
     <label for="HoVaTenND">Họ Tên Người Dùng</label>
     <input type="text" class="form-control" name="HoVaTenND" value="{{$taikhoan->HoVaTenND}}"/>
   </div>
   <div class="form-group">
     <label for="UserName">UserName</label>
     <input type="text" class="form-control" name="UserName" value="{{$taikhoan->UserName}}"/>
   </div>
   <div class="form-group">
     <label for="password">Mật Khẩu</label>
     <input type="password" class="form-control" name="password" value="{{$taikhoan->password}}" />
   </div>
   <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="Email" value="{{$taikhoan->Email}}"/>
  </div>
  <div class="form-group">
    <label for="diachi">Địa Chỉ</label>
    <input type="text" class="form-control" name="DiaChi" value="{{$taikhoan->DiaChi}}"/>
  </div>
  <div class="form-group">
    <label for="sdt">SĐT</label>
    <input type="text" class="form-control" name="SDT" value="{{$taikhoan->SDT}}"/>
  </div>
  <div class="form-group">
    <label for="loaitk">Loại Tài Khoản</label>
    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" name="LoaiTK"  placeholder="Status">
                        <option value="1">Admin</option>
                        <option value="0">Người Dùng</option>
                    </select>
  </div>
  <div class="form-group">
     <label for="AnhDaiDien">Hình Ảnh</label>
     <div class="form-group">
     <img id="AnhDaiDien" width="15%" src="{{asset('image/'.$taikhoan->AnhDaiDien)}}" alt="no img" class="img-thumbnail" />
     <input type="file" class="form-control" name="AnhDaiDien" value="" id="AnhDaiDien" value="{{$taikhoan->AnhDaiDien}}"/>
   </div>
   <div class="form-group">
                                    
                                    <p>
                                    <label class="custom-file-label" for="ful"><i><u><b>Choose File</b></u></i></label>
                                    </p>
                                </div>
  <div class="form-group">
    <label for="trangthai">Trạng Thái</label>
    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" name="TrangThai"  placeholder="Status">
    @if($taikhoan->TrangThai==0)
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        @elseif($taikhoan->TrangThai==1)
                        <option value="0" >0</option>
                        <option value="1" selected>1</option>
                        @endif
                        
                    </select>
  </div>

   <button type="submit" name="btn_addproduct"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
 