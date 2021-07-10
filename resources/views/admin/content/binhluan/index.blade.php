@extends('admin.layout')
@section('content')

<div id="table">
<div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary">Quản Lý Bình Luận</a>
                    <a class="btn btn-success"href="{{route('binhluan.create')}}">Thêm mới</a>
                </div>
                <div>
<table  class="table table-hover" >
              <thead>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Tên Khách Hàng</th>
                <th>Ngày Bình Luận</th>
                <th>Nội Dung</th>
                <th>Trạng Thái</th>
                <th>Chỉnh sửa</th>
                <th>Xóa</th>
              
              </thead>
              <tbody>
                  <tr>
                  @foreach($binhluan ?? '' as $binhluans)
                  <tr>
                    <td>{{$binhluans->id}}</td>
                    <td>{{$binhluans->SanPham->TenSP}}</td>
                    <td>{{$binhluans->TaiKhoan->HoVaTenND}}</td>
                    <td>{{$binhluans->Ngay}}</td>
                    <td>{{$binhluans->NoiDung}}</td>
                    <td> 
                    @if($binhluans->TrangThai == 0) {{"Đã Hủy"}}
                    @else {{"Hoạt Động"}}
                    @endif

                    <td><a href="{{route('binhluan.edit',$binhluans->id)}}" class="btn btn-primary"><i class="mdi mdi-pencil menu-icon" ></i></a></td>
                    <td>
                    <form action="{{route('binhluan.destroy', $binhluans->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                            @if($binhluans->TrangThai==1)
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
