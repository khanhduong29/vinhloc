<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="/vinhloc//theme/frontend/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/vinhloc/theme/frontend/css/animate.css">
		<link rel="stylesheet" type="text/css" href="/vinhloc/theme/frontend/css/select2.min.css">
		<link rel="stylesheet" type="text/css" href="/vinhloc/theme/frontend/css/slick.css">
		<link rel="stylesheet" type="text/css" href="/vinhloc/theme/frontend/css/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="/vinhloc/theme/frontend/fonts/fontawesome-free-5.13.0-web/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="/vinhloc/theme/frontend/css/style.css">
		<link rel="stylesheet" type="text/css" href="/vinhloc/theme/frontend/css/reponsive.css">
	</head>
	<body>
		<div class="back-top" onclick="fc_top()" id="icon-back-top">
			<img src="/vinhloc/theme/frontend/images/icon/ic-btop.png" alt="">
		</div>
		<div class="number-phone-mobile d-lg-none wow swing">
			<a href="tel:091 668 1919" class="pline c-feb hv-c-fff" title="091 668 1919">091 668 1919</a>
		</div>
		<header>
			<nav class="d-none d-lg-block">
				<section class="header-top pt-5"> 
					<div class="container"> 
						<div class="row pl-5 pr-5"> 
							<div class="col-lg-9 col-md-9 col-xs-12 d-none d-md-block d-lg-block"> 
								<a href="tel:091 668 1919" class="pline text-left c-feb hv-c-fff" title="091 668 1919">091 668 1919</a> 
							</div> 
							<div class="col-lg-3 col-md-3 col-xs-12 d-flex"> 
								<div class="fr-search text-right"> 
									<form action="tim-kiem" method="get"> 
										<input type="text" name="name" placeholder="Tìm kiếm sản phẩm ..." value=""> 
										<button type="submit"></button> 
									</form> 
								</div> 
								<a href="" title="" class="img-cart"><img src="/vinhloc/theme/frontend/images/icon/ic-cart.png" alt="error"></a>
							</div>
						</div> 
					</div>
				</section>
				<section class="header-menu" id="header">
					<div class="container">
						<img src="/vinhloc/theme/frontend/images/logo1.png" class="logo" alt="">
						<div class="body-sticker text-center">
							<div class="row">
								<div class="col-lg-5">
									<ul class="menu-left d-flex justify-content-center">
										<li><a href="index.html" class="active">Trang chủ</a></li>
										<li><a href="about.html">Giới thiệu</a></li>
										<li>
											<i class="fa fa-angle-right"></i>
											<a href="product.html">Sản phẩm</a>
											<ul>
												<li><a href="" class="smooth">Link 2 Lorem ipsum dolor</a></li>
							    				<li>
							    					<i class="fa fa-angle-right"></i>
							    					<a href="#" class="smooth">Dropdown</a>
							    					<ul>
									    				<li><a href="news-detail.html" class="smooth">Chi tiết tin</a></li>
									    				<li><a href="" class="smooth">Link 2 Lorem ipsum dolor</a></li>
									    				<li><a href="" class="smooth">Link 3 Lorem ipsum dolor</a></li>
									    			</ul>
							    				</li>
							    				<li><a href="" class="smooth">Link 3 Lorem ipsum dolor</a></li>
							    			</ul>
										</li>
									</ul>
								</div>
								<div class="col-lg-2">
									<a href="" title="" class="logo-word">Vĩnh lộc luxury</a>
								</div>
								<div class="col-lg-5">
									<ul class="menu-right d-flex justify-content-center">
										<li><a href="service.html">Dịch vụ</a></li>
										<li><a href="construction.html">Công trình</a></li>
										<li><a href="contact.html">Liên hệ</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>
			</nav>
			<nav class="d-block d-lg-none menu-mobile" >
				<div class="container">
					<div class="row">
						<div class="col-3">
							<a href="index.html" title="" class="logo-mobile">
								<img src="/vinhloc/theme/frontend/images/logo-ft.png" alt="">
							</a>
						</div>
						<div class="mobile-phone col-7">
							<div class="fr-search fr-search-mobile"> 
								<button type="button" onclick="openSearch()"></button> 
								<div id="myOverlay" class="overlay">
								  	<span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
								  	<div class="overlay-content">
								    	<form action="">
								      		<input type="text" placeholder="Search.." name="search">
								      		<button type="submit"></button>
								    	</form>
								  	</div>
								</div>
							</div> 
						</div>
						<button class="nav-toggler col-2">
				          	<span></span>
				        </button>
					</div>
			        <div class="sticker-menu" id="menu-mobile">
			        	<div class="title">Menu</div>
			        	<div class="close-menu">
			        		<i class="fas fa-arrow-left"></i>
			        	</div>
			        	<div class="mobile-search">
			        		<form action="" method="get" accept-charset="utf-8">
			        			<input type="text" name="" placeholder="Tìm kiếm sản phẩm...">
			        			<button type=""><i class="fas fa-search"></i></button>
			        		</form>
			        	</div>
			        	<ul>
			        		<li><a href="index.html">Trang chủ</a></li>
			        		<li><a href="about.html">Giới thiệu</a></li>
			        		<li>
			        			<i class="change-down fa fa-angle-right"></i>	
								<a href="product.html">Sản phẩm</a>
								<ul>
									<li><a href="" class="smooth">Link 2 Lorem ipsum dolor</a></li>
				    				<li>
				    					<i class="change-down fa fa-angle-right"></i>	
				    					<a href="#" class="smooth">Dropdown</a>
				    					<ul>
						    				<li><a href="news-detail.html" class="smooth">Chi tiết tin</a></li>
						    				<li><a href="" class="smooth">Link 2 Lorem ipsum dolor</a></li>
						    				<li><a href="" class="smooth">Link 3 Lorem ipsum dolor</a></li>
						    			</ul>
				    				</li>
				    				<li><a href="" class="smooth">Link 3 Lorem ipsum dolor</a></li>
				    			</ul>
			        		</li>
			        		<li><a href="service.html">Dịch vụ</a></li>
			        		<li><a href="construction.html">Cồng trình</a></li>
			        		<li><a href="contact.html">Liên hệ</a></li>
			        	</ul>
			        </div>
				</div>
			</nav>
		</header><!-- /header -->