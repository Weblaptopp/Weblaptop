@extends('admin.layout')
@section('content')

<div id="table">
<div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary">Quản Lý Đơn Hàng</a>
                    <a class="btn btn-success"href="{{route('donhang.create')}}">Thêm mới</a>
                </div>
                <div>
<table  class="table table-hover" >
              <thead>
                <th>ID</th>
                <th>Tên Khách Hàng</th>
                <th>Số Điện Thoại</th>
                <th>Địa Chỉ</th>
                <th>Ngày đặt hàng</th>
                <th>Thành tiền</th>
                <th>Trạng Thái</th>
                <th>Chỉnh sửa</th>
                <th>Xóa</th>
              
              </thead>
              <tbody>
                  <tr>
                  @foreach($donhang ?? '' as $donhangs)
                  <tr>
                    <td>{{$donhangs->id}}</td>
                    <td>{{$donhangs->TaiKhoan->HoVaTenND}}</td>
                    <td>{{$donhangs->SDT}}</td>
                    <td>{{$donhangs->DiaChi}}</td>
                    <td>{{$donhangs->Ngay}}</td>
                    <td>{{$donhangs->ThanhTien}}</td>
                    <td> 
                    @if($donhangs->TrangThai == 0) {{"Đã Hủy"}}
                    @else {{"Hoạt Động"}}
                    @endif

                    <td><a href="{{route('donhang.edit',$donhangs->id)}}" class="btn btn-primary"><i class="mdi mdi-pencil menu-icon" ></i></a></td>
                    <td>
                    <form action="{{route('donhang.destroy', $donhangs->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                            @if($donhangs->TrangThai==1)
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
