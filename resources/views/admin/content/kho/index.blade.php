@extends('admin.layout')
@section('content')

<div id="table">
<div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary">Quản lý Kho</a>
                    <a class="btn btn-success" href="{{route('kho.create')}}">Thêm mới</a>
                </div>
                <div>
<table  class="table table-hover" >
              <thead>
                <th>ID</th>             
                <th>ID Sản Phẩm</th>
                <th>Số lượng tồn</th>
                <th>Trạng Thái</th>
                <th>Chỉnh sửa</th>
                <th>Xóa</th>
              
              </thead>
              <tbody>
                  <tr>
                  @foreach($kho ?? '' as $khos)
                  <tr>
                    <td>{{$khos->id}}</td>
                    <td>{{$khos->SanPham->TenSP}}</td>
                    <td>{{$khos->TonKho}}</td>
                    <td> 
                    @if($khos->TrangThai == 0) {{"Ngừng hoạt động"}}
                    @else {{"Hoạt động"}}
                    @endif

                    <td><a href="{{route('kho.edit',$khos->id)}}" class="btn btn-primary"><i class="mdi mdi-pencil menu-icon" ></i></a></td>
                    <td>
                    <form action="{{route('kho.destroy', $khos->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                            @if($khos->TrangThai==1)
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
