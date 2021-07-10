@extends('admin.layout')
@section('content')
<form method="POST" enctype="multipart/form-data" action="{{route('taikhoan.store')}}">
    {{ csrf_field() }}
    
   <div class="form-group">
     <label for="HoVaTenND">Họ Và Tên</label>
     <input type="text" class="form-control" name="HoVaTenND" required>
   </div>
   <div class="form-group">
     <label for="UserName">UserName</label>
     <input type="text" class="form-control" name="UserName" required>
   </div>
   <div class="form-group">
     <label for="password">Mật Khẩu</label>
     <input type="text" class="form-control" name="password" required>
   </div>
   <div class="form-group">
     <label for="Email">Email</label>
     <input type="text" class="form-control" name="Email" required>
   </div>
   <div class="form-group">
     <label for="DiaChi">Địa Chỉ</label>
     <input type="text" class="form-control" name="DiaChi" required>
   </div>
   <div class="form-group">
    <label for="LoaiTK">Loại Tài Khoản</label>
    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" name="LoaiTK"  placeholder="Status">
                        <option value="0">Người Dùng</option>
                        <option value="1">Admin</option>
                        
                    </select>
  </div>
   <div class="form-group">
     <label for="SDT">Số Điện Thoại</label>
     <input type="text" class="form-control" name="SDT" required>
   </div>
   <label for="AnhDaiDien">Hình Ảnh</label>
   <div class="form-group">
     <img id="AnhDaiDien" width="15%" hight="10%" src="{{asset('image/noimage.jpg')}}" alt="no img" class="img-thumbnail" />
     <input type="file" class="form-control" name="AnhDaiDien" value="" id="AnhDaiDien"/>
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
 