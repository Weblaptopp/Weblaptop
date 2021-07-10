@extends('admin.layout')
@section('content')

<div id="table">
<div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary">Quản lý Nhà Cung Cấp</a>
                    <a class="btn btn-success"href="{{route('nhacungcap.create')}}">Thêm mới</a>
                </div>
                <div>
<table  class="table table-hover" >
              <thead>
                <th>ID</th>
                <th>Tên Nhà Cung Cấp </th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th>Trạng Thái</th>
                <th>Chỉnh Sửa</th>
                <th>Xóa</th>
              </thead>
              <tbody>
                  <tr>
                  @foreach($nhacungcap ?? '' as $nhacungcaps)
                  <tr>
                    <td>{{$nhacungcaps->id}}</td>
                    <td>{{$nhacungcaps->TenNCC}}</td>
                    <td>{{$nhacungcaps->DiaChi}}</td>
                    <td>{{$nhacungcaps->DienThoai}}</td>
                    <td>{{$nhacungcaps->Email}}</td>
                    <td> 
                    @if($nhacungcaps->TrangThai == 0) {{"Ngừng hoạt động"}}
                    @else {{"Hoạt động"}}
                    @endif
                    <td><a href="{{route('nhacungcap.edit',$nhacungcaps->id)}}" class="btn btn-primary"><i class="mdi mdi-pencil menu-icon" ></i></a></td>
                    <td>
                    <form action="{{route('nhacungcap.destroy', $nhacungcaps->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                            
                                           
                                            @if($nhacungcaps->TrangThai==1)
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
