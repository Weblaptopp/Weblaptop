@extends('admin.layout')
@section('content')

<div id="table">
<div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary">Quản lý Danh Mục</a>
                    <a class="btn btn-success"href="{{route('danhmuc.create')}}">Thêm mới</a>
                </div>
                <div>
<table  class="table table-hover" >
              <thead>
                <th>ID</th>
                <th>Tên Danh Mục</th>
                <th>Trạng Thái</th>
                <th>Chỉnh sửa</th>
                <th>Xóa</th>
              </thead>
              <tbody>
                  <tr>
                  @foreach($danhmuc ?? '' as $danhmucs)
                  <tr>
                    <td>{{$danhmucs->id}}</td>
                    <td>{{$danhmucs->TenDanhMuc}}</td>
                    <td> 
                    @if($danhmucs->TrangThai == 0) {{"Ngừng hoạt động"}}
                    @else {{"Hoạt động"}}
                    @endif
                    <td><a href="{{route('danhmuc.edit',$danhmucs->id)}}" class="btn btn-primary"><i class="mdi mdi-pencil menu-icon" ></i></a></td>
                    <td>
                    <form action="{{route('danhmuc.destroy', $danhmucs->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')    
                                            @if($danhmucs->TrangThai==1)
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

