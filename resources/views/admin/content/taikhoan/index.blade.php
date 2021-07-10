@extends('admin.layout')
@section('content')

<div id="table">
<div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary">Quản lý</a>
                    <a class="btn btn-success"href="{{route('taikhoan.create')}}">Thêm mới</a>
                </div>
                <div>
<table  class="table table-hover" >
              <thead>
                <th>ID</th>
                <th>Họ và Tên </th>
                <th>UserName </th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>SDT</th>
                <th>Loại User</th>
                <th>Ảnh Đại Diện</th>
                <th>Trạng Thái</th>
                <th>Chỉnh sửa</th>
                <th>Xóa</th>
              
              </thead>
              <tbody>
                  <tr>
                  @foreach($taikhoan ?? '' as $taikhoans)
                  <tr>
                    <td>{{$taikhoans->id}}</td>
                    <td>{{$taikhoans->HoVaTenND}}</td>
                    <td>{{$taikhoans->UserName}}</td>
                    <td>{{$taikhoans->Email}}</td>
                    <td>{{$taikhoans->DiaChi}}</td>
                    <td>{{$taikhoans->SDT}}</td>
                    <td>@if($taikhoans->LoaiTK==1) {{"Admin"}}
                    @else {{"Người Dùng"}}
                    @endif</td>
                    <td><img class="img-thumbnail" src="{{asset('image/'.$taikhoans->AnhDaiDien)}}"></td>
                   
                    <td> 
                    @if($taikhoans->TrangThai == 0) {{"Không Hoạt Động"}}
                    @else {{"Hoạt Động"}}
                    @endif
                    <td><a href="{{route('taikhoan.edit',$taikhoans->id)}}"  class="btn btn-primary"><i class="mdi mdi-pencil menu-icon" ></i></a></td>
                    <td>
                    <form action="{{route('taikhoan.destroy',$taikhoans->id)}}"  method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                            
                                           
                                            @if($taikhoans->TrangThai==1)
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
