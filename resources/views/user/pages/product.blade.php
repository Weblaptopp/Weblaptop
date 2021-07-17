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
					<h3>Giá từ</h3>
					<ul class="dropdown-menu1">
							<li><a href="">								               
							<div id="slider-range"></div>							
							<input type="text" id="amount" style="border: 0" />
							</a></li>	
					</ul>
						<script type='text/javascript'>//<![CDATA[ 
						$(window).load(function(){
						 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 60000000,
								values: [ 10000000, 60000000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( $ + ui.values[ 0 ] + " - đ" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + "đ" +"-" + $( "#slider-range" ).slider( "values", 1 )+"đ");


						});//]]>
						</script>
						<script type="text/javascript" src="js/jquery-ui.min.js"></script>
					 <!---->
				</div>
			<!--
					<div class="categories animated wow slideInUp" data-wow-delay=".5s">
					<h3>Danh Mục</h3>
					<ul class="cate">
						<li><a href="products.html">Best Selling</a> <span>(15)</span></li>
						<li><a href="products.html">Man</a> <span>(16)</span></li>
							<ul>
								<li><a href="products.html">Accessories</a> <span>(2)</span></li>
								<li><a href="products.html">Coats & Jackets</a> <span>(5)</span></li>
								<li><a href="products.html">Jeans</a> <span>(1)</span></li>
								<li><a href="products.html">New Arrivals</a> <span>(0)</span></li>
								<li><a href="products.html">Suits</a> <span>(1)</span></li>
								<li><a href="products.html">Casual Shirts</a> <span>(0)</span></li>
							</ul>
						<li><a href="products.html">Sales</a> <span>(15)</span></li>
						<li><a href="products.html">Woman</a> <span>(15)</span></li>
							<ul>
								<li><a href="products.html">Accessories</a> <span>(2)</span></li>
								<li><a href="products.html">New Arrivals</a> <span>(0)</span></li>
								<li><a href="products.html">Dresses</a> <span>(1)</span></li>
								<li><a href="products.html">Casual Shirts</a> <span>(0)</span></li>
								<li><a href="products.html">Shorts</a> <span>(4)</span></li>
							</ul>
					</ul>
				</div>
				-->
				<div class="new-products animated wow slideInUp" data-wow-delay=".5s">
					<h3>New Products</h3>
					<div class="new-products-grids">
						<div class="new-products-grid">
							<div class="new-products-grid-left">
								<a href="single.html"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
							</div>
							<div class="new-products-grid-right">
								<h4><a href="single.html">occaecat cupidatat</a></h4>
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="simpleCart_shelfItem new-products-grid-right-add-cart">
									<p> <span class="item_price">$180</span><a class="item_add" href="#">add to cart </a></p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="new-products-grid">
							<div class="new-products-grid-left">
								<a href="single.html"><img src="images/26.jpg" alt=" " class="img-responsive" /></a>
							</div>
							<div class="new-products-grid-right">
								<h4><a href="single.html">eum fugiat quo</a></h4>
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="simpleCart_shelfItem new-products-grid-right-add-cart">
									<p> <span class="item_price">$250</span><a class="item_add" href="#">add to cart </a></p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="new-products-grid">
							<div class="new-products-grid-left">
								<a href="single.html"><img src="images/11.jpg" alt=" " class="img-responsive" /></a>
							</div>
							<div class="new-products-grid-right">
								<h4><a href="single.html">officia deserunt</a></h4>
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="simpleCart_shelfItem new-products-grid-right-add-cart">
									<p> <span class="item_price">$259</span><a class="item_add" href="#">add to cart </a></p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="men-position animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.html"><img src="images/27.jpg" alt=" " class="img-responsive" /></a>
					<div class="men-position-pos">
						<h4>Summer collection</h4>
						<h5><span>55%</span> Flat Discount</h5>
					</div>
				</div>
			</div>
			<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids animated wow slideInRight" data-wow-delay=".5s">
						<div class="sorting">
							<select id="sort" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">Sắp xếp </option>
								<option value="null">Bán chạy nhất</option> 
								<option value="{{Request::url()}}?sort_by=pho_bien">Phổ biến nhất</option> 
								<option value="{{Request::url()}}?sort_by=tang_dan">Giá thấp đến cao</option>					
								<option value="{{Request::url()}}?sort_by=giam_dan">Giá cao đến thấp</option>
								<option value="{{Request::url()}}?sort_by=kytu_tangdan">Từ A đến Z</option>
								<option value="{{Request::url()}}?sort_by=kytu_giamdan">Từ Z đến A</option>								
							</select>
						</div>
						<div class="sorting-left">
							<select id="sort1" onchange="change_country(this.value)" class="frm-field required sect">
							<option value="">Hiển thị sản phẩm</option>
							<option value="{{Request::url()}}?sort_by1=hienthi9sp">Hiển thị 9 sản phẩm</option>					
							<option value="{{Request::url()}}?sort_by1=hienthitatca">Tất cả</option>							
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="products-right-grids-position animated wow slideInRight" data-wow-delay=".5s">
						<img src="images/18.jpg" alt=" " class="img-responsive" />
						<div class="products-right-grids-position1">
							<h4>MACBOOK</h4>
							<p>GIẢM đến 1 TRIỆU Trả góp 0%</p>
						</div>
					</div>
				</div>
			<div class="products-right-grids-bottom">
				<div class="col-md-4 products-right-grids-bottom-grid">
					@foreach($sanphams as $sanpham)
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
								<p><i>{{$sanpham->GiaCu}}0.000đ</i> <span class="item_price">{{$sanpham->Gia}}0.000đ</span><a class="item_add" href="#">Mua Ngay</a></p>
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
					{{$sanphams->links()}}
					  
					  </a>
					</li>
				  </ul>
				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<script type="text/javascript">
$(document).ready(function(){
	$('#sort').on('change',function(){
		var url=$(this).val();
		if(url){
			window.location=url;
		}
		return false;
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('#sort1').on('change',function(){
		var url=$(this).val();
		if(url){
			window.location=url;
		}
		return false;
	});
});
</script>

	
   
<!-- //breadcrumbs -->
@stop