@extends('admin.layout')
@section('content')
<form action="{{route('donhang.update',$donhang->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @csrf
            @method('PUT')
    
  <div class="form-group">
    <label for="trangthai">Trạng Thái</label>
    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" name="TrangThai"  placeholder="Status">
    @if($donhang->TrangThai==0)
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        @elseif($donhang->TrangThai==1)
                        <option value="0" >0</option>
                        <option value="1" selected>1</option>
                        @endif
                        
                    </select>
  </div>

   <button type="submit" name="btn_addproduct"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
 