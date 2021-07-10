<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>Giới thiệu</h3>
					<p>Giới thiệu sơ lượt về Store</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Liên hệ</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>65 Huỳnh Tấn Phát<span>Thành phố Hồ Chí Minh</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
					<h3>Sản Phẩm Đáng Chú Ý</h3>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
					<h3>Blog Posts</h3>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.html"><img src="images/9.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.html">culpa qui officia deserunt</a></h4>
							<p>Posted On 25/3/2016</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.html">Quis autem vel eum iure</a></h4>
							<p>Posted On 25/3/2016</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.html">Best Store <span>shop anywhere</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>&copy 2016 Best Store. All rights reserved | Design by <a href="http://w3layouts.com/">Nga&Duong</a></p>
			</div>
		</div>
	</div>

	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- imagezoom -->
	<script src="js/imagezoom1.js"></script>
	<!-- //imagezoom -->

	<!-- flexslider -->
	<link rel="stylesheet" href="css/flexslider1.css" type="text/css" media="screen" />

	<script src="js/jquery.flexslider1.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="css/fontawesome-all1.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box1.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu1.css" rel="stylesheet" type="text/css" media="all" />
	
	
