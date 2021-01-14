


<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('css/niceselect.css') }}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/flex-slider.min.css') }}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
		
		<!-- Header -->
		<header class="header shop">
			<div class="middle-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-12">
							<!-- Logo -->
							<div class="logo">
								<a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
							</div>
							<!--/ End Logo -->
							<!-- Search Form -->
							<div class="search-top">
								<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
								<!-- Search Form -->
								<div class="search-top">
									<form class="search-form">
										<input type="text" placeholder="Search here..." name="search">
										<button value="search" type="submit"><i class="ti-search"></i></button>
									</form>
								</div>
								<!--/ End Search Form -->
							</div>
							<!--/ End Search Form -->
							<div class="mobile-nav"></div>
						</div>
						<div class="col-lg-8 col-md-7 col-12">
							<div class="search-bar-top">
								<h1>Shopping-Cart</h1>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-12">
							<div class="right-bar">
								<!-- Search Form -->
								<!-- <div class="sinlge-bar">
									<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
								<div class="sinlge-bar">
									<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
								</div> -->
								<div class="sinlge-bar shopping">
									<a href="#" class="single-icon"><i class="ti-bag"></i> <span id="total_count" class="total-count">0</span></a>
									<!-- Shopping Item -->
									
									<!--/ End Shopping Item -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--/ End Header -->
	
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li>Menu</li>
							<!-- <li class="active"><a href="blog-single.html">Cart</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
			

	<div class="shopping-cart section">
		<div class="container">
			<div class="col">
				<div class="row">
				@foreach($items as $item)
				<div class="col-12 col-md-6 col-lg-4">
							<div class="card">
								<img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
								<div class="card-body">
									<!-- <p hidden class="product_id">{{ $item->item_id }}</p> -->
									<h4 class="card-title"><a href="product.html" title="View Product">{{ $item->item_name }}</a></h4>
									<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
									<div class="row">
										<div class="col">
											<p class="btn btn-danger btn-block add" style="width: 70%;" id="{{ $item->item_id }}">Add</p>
										</div>
										<div class="col">
											<p class="btn btn-danger btn-block remove" style="width: 87%;" id="{{ $item->item_id }}">Remove</p>
										</div>
									</div>
								</div>
							</div>
						</div>
				@endforeach
						
					
				
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
			
	
	
	<!-- Jquery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Color JS -->
	<script src="{{ asset('js/colors.js') }}"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('js/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('js/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('js/magnific-popup.js') }}"></script>
	<!-- Fancybox JS -->
	<script src="{{ asset('js/facnybox.min.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('js/waypoints.min.js') }}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('js/finalcountdown.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('js/nicesellect.js') }}"></script>
	<!-- Ytplayer JS -->
	<script src="{{ asset('js/ytplayer.min.js') }}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('js/flex-slider.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('js/scrollup.js') }}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('js/onepage-nav.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('js/easing.js') }}"></script>
	<!-- Active JS -->
	<script src="{{ asset('js/active.js') }}"></script>
	<script>
		$( ".add" ).click(function() {
			var quty = Number($('#total_count').text());
			console.log('click');
			var csrf = $('meta[name="csrf-token"]').attr('content');
			var id = $(this).attr('id');
			var name = $(this).closest('.card-body').find('a').text();
			$.ajax({
				url: '/add',
				type: 'POST',
				data: {item_id : id, item_name : name,'_token': csrf},
				dataType: 'json',

				success: function( data ) {
					console.log('check');
					console.log(data);
					if(data.status==true){
						// var quty = Number($('#total_count').text();
						
						alert('product added successfully');
						$('#total_count').text(quty+1);
					}
				}       
			})
		});

		$( ".remove" ).click(function() {
			console.log('click');
			var csrf = $('meta[name="csrf-token"]').attr('content');
			var id = $(this).attr('id');
			// var name = $(this).closest('.card-body').find('a').text();
			$.ajax({
				url: '/remove',
				type: 'POST',
				data: {item_id : id,'_token': csrf},
				dataType: 'json',

				success: function( data ) {
					console.log('check');
					console.log(data);
					if(data.status==true){
						
						alert('product removed from cart successfully');
						$('#total_count').text(0);
					}
				}       
			})
		});
	</script>

</body>
</html>