@extends('admin.layout')
@section('content')

<div id="table">
<div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary">Quản lý</a>
                    <a class="btn btn-success"href="{{route('khuyenmai.create')}}">Thêm mới</a>
                </div>
                <div>
<table  class="table table-hover" >
              <thead>
                <th>ID</th>
                <th>ID Sản Phẩm</th>
                <th>Khuyến Mãi</th>
                <th>Chỉnh sửa</th>
                <th>Xóa</th>
              
              </thead>
              <tbody>
                  <tr>
                  @foreach($khuyenmai ?? '' as $khuyenmais)
                  <tr>
                    <td>{{$khuyenmais->id}}</td>
                    <td>{{$khuyenmais->SanPham->TenSP}}</td>
                    <td>{{$khuyenmais->KhuyenMai}}%</td>
                    <td> 
                    @if($khuyenmais->TrangThai == 0) {{"Hết khuyến mãi"}}
                    @else {{"Còn khuyến mãi"}}
                    @endif
                    <td><a href="{{route('khuyenmai.edit',$khuyenmais->id)}}" class="btn btn-primary"><i class="mdi mdi-pencil menu-icon" ></i></a></td>
                    <td>
                    <form action="{{route('khuyenmai.destroy',$khuyenmais->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                            
                                           
                                            @if($khuyenmais->TrangThai==1)
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
