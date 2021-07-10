@extends('user.layout')
@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Sản Phẩm</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
				</div>
				
			</div>
			<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids animated wow slideInRight" data-wow-delay=".5s">
						
					
						<div class="clearfix"> </div>
					</div>
					
				</div>
				@if(count($kq)==0)
				<section>
            <div class="report_text">
                <h3>Rất tiếc, không tìm thấy kết quả nào phù hợp với từ khóa..!! <strong></strong></h3>
            </div>
            <div class="noresultsuggestion">
                <h4>Để tìm được kết quả chính xác hơn, bạn vui lòng:</h4>
                <ul>
                    <li>Kiểm tra lỗi chính tả của từ khóa đã nhập</li>
                    <li>Thử lại bằng từ khóa khác</li>
                    <li>Thử lại bằng những từ khóa tổng quát hơn</li>
                    <li>Thử lại bằng những từ khóa ngắn gọn hơn</li>
                </ul>
            </div>
</section>
@else
			<div class="products-right-grids-bottom">
				<div class="col-md-4 products-right-grids-bottom-grid">
					@foreach($kq as $sanpham)
						<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
							<div class="new-collections-grid1-image">
								<a href="single.html" class="product-image"><img src="{!! asset('image/'.$sanpham->HinhAnh)!!}" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos products-right-grids-pos">
									<a href="{{route('user.single',$sanpham->id)}}">Xem Ngay</a>
								</div>
								<div class="new-collections-grid1-right products-right-grids-pos-right">
									<div class="rating">
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="{{route('user.single',$sanpham->id)}}">{{$sanpham->TenSP}}</a></h4>
							<div class="simpleCart_shelfItem products-right-grid1-add-cart">
								<p><i>13.990.000₫</i> <span class="item_price">{{$sanpham->Gia}}0.000đ</span><a class="item_add" href="#">Mua Ngay</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 products-right-grids-bottom-grid">
					@endforeach
				</div>
					<div class="clearfix"> </div>
			</div>	
				<nav class="numbering animated wow slideInRight" data-wow-delay=".5s">
				  <ul class="pagination paging">
					<li>	
					  </a>
					</li>
					@endif
					  </a>
					</li>
				  </ul>
				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	
   
<!-- //breadcrumbs -->
@stop