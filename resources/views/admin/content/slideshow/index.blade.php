@extends('admin.layout')
@section('content')

<div id="table">
<div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary">Quản lý</a>
                    <a class="btn btn-success"href="{{route('sildeshow.create')}}">Thêm mới</a>
                </div>
                <div>
<table  class="table table-hover" >
              <thead>
                <th>ID</th>
                <th>Hình Ảnh</th>
                <th>URL</th>
                <th>Chỉnh sửa</th>
                <th>Xóa</th>
              
              </thead>
              <tbody>
                  <tr>
                    <td>dff</td>
                    <td>dzds </td>

                    <td><a  class="btn btn-primary"><i class="mdi mdi-pencil menu-icon" ></i></a></td>
                
                    <td>
                    <form  method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="mdi mdi-delete menu-icon"></i></button>
                    </td>
                    

                    </form>
                  </tr>
              
                
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
