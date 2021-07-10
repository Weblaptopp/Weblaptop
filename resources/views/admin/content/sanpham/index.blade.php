@extends('admin.layout')
@section('content')

<div id="table">
<div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary">Quản lý Sản Phẩm</a>
                    <a class="btn btn-success" href="{{route('sanpham.create')}}">Thêm mới</a>
                </div>
                <div>
<table  class="table table-hover" >
              <thead>
                <th>ID</th>
                <th>Tên LapTop</th>
                <th>Hình Ảnh</th>
                <th>CPU</th>
                <th>RAM</th>
                <th>Ổ Cứng</th>
                <th>Màn Hình</th>
                <th>Card Màn Hình</th>
                <th>Cổng Kết Nối</th>
                <th>Hệ Điều Hành </th>
                <th>Thiết Kế</th>
                <th>Kích Thước</th>
                <th>Thời Điểm Ra Mắt</th>
                <th>Mô Tả</th>
                <th>Giá</th>
                <th>Nhà Cung Cấp</th>
                <th>Tên Danh Mục</th>
                <th>Trạng Thái</th>
                <th>Chỉnh sửa</th>
                <th>Xóa</th>
              
              </thead>
              <tbody>
                  <tr>
                  @foreach($sanpham ?? '' as $sanphams)
                  <tr>
                    <td>{{$sanphams->id}}</td>
                    <td>{{$sanphams->TenSP}}</td>
                    <td><img class="img-thumbnail" src="{{asset('image/'.$sanphams->HinhAnh)}}"></td>
                    <td>{{$sanphams->CPU}}</td>
                    <td>{{$sanphams->Ram}}</td>
                    <td>{{$sanphams->OCung}}</td>
                    <td>{{$sanphams->ManHinh}}</td>
                    <td>{{$sanphams->CardManHinh}}</td>
                    <td>{{$sanphams->CongKetNoi}}</td>
                    <td>{{$sanphams->HeDieuHanh}}</td>
                    <td>{{$sanphams->ThietKe}}</td>
                    <td>{{$sanphams->KichThuoc}}</td>
                    <td>{{$sanphams->ThoiDiemRaMat}}</td>
                    <td>{{$sanphams->MoTa}}</td>
                    <td>{{$sanphams->Gia}}</td>
                    <td>{{$sanphams->NhaCungCap->TenNCC}}</td>
                    <td>{{$sanphams->TenDanhMuc->TenDanhMuc}}</td>
                    <td> 
                    @if($sanphams->TrangThai == 0) {{"Hết Hàng"}}
                    @else {{"Còn hàng"}}
                    @endif
                    <td><a href="{{route('sanpham.edit',$sanphams->id)}}" class="btn btn-primary"><i class="mdi mdi-pencil menu-icon" ></i></a></td>
                    <td>
                    <form action="{{route('sanpham.destroy',$sanphams->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                        
                                            @if($sanphams->TrangThai==1)
                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn hủy?')" class="btn btn-danger"><i class="mdi mdi-delete menu-icon"></i></button>
                                                @else
                                                <button type="submit" onclick="return confirm('Bạn có muốn khôi phục?')" class="btn btn-success"><i class="mdi mdi-delete menu-icon"></i></button>
                                                @endif
                                            </td>
                                            </form>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        
<div>
<style>
  .table table table-hover{
    overflow: hidden;
    text-align: center;
  }
  </style>
@stop