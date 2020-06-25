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
		<link rel="stylesheet" href="/vinhloc/theme/frontend/dist/jquery.fancybox.css">
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
			<div id="headerTop" class="d-none d-lg-block">
	            <div class="container d-flex justify-content-between">
	                <div class="d-flex flex-row">
	                    <div class="ht-email pr-5 d-none d-md-block">
	                        <i class="fas fa-envelope"></i><span class="d-inline-block ml-2">Denvinhloc243@gmail.com</span>
	                    </div>
	                </div>
	                <div class="d-flex flex-row">
	                    <a href="resource/pages/login.php" class="pr-2  c-fff">
	                        <span class="d-inline-block ml-2">Đăng nhập</span>
	                    </a>
	                    <a href="resource/pages/login.php" class="border-left pl-2 c-fff">
	                        <span class="d-inline-block ml-2">Đăng ký</span>
	                    </a>
	                </div>
	            </div>
	        </div>
			<nav class="d-none d-lg-block">
				<section class="header-top pt-5"> 
					<div class="container"> 
						<div class="row pl-5 pr-5"> 
							<div class="col-lg-9 col-md-9 col-xs-12 d-none d-md-block d-lg-block"> 
								<a href="tel:091 668 1919" class="pline text-left c-feb hv-c-fff" title="091 668 1919">091 668 1919</a> 
							</div> 
							<div class="col-lg-3 col-md-3 col-xs-12 d-flex "> 
								<div class="fr-search text-right"> 
									<form action="tim-kiem" method="get"> 
										<input type="text" name="name" placeholder="Tìm kiếm sản phẩm ..." value=""> 
										<button type="submit"></button> 
									</form> 
								</div> 
								<a  title="" class="img-cart cart-lap"><img src="/vinhloc/theme/frontend/images/icon/ic-cart-feb.png" alt="error"></a>
								<span class="amount-cart">3</span>
								<div class="cart-hover">
	                                <table class="select-items">
	                                    <tr ng-repeat="c in carts">
	                                        <td class="si-img">
	                                            <img src="/vinhloc/theme/frontend/images/product/061915d98b626d3c3473.jpg" alt="">
	                                        </td>
	                                        <td class="si-content">
	                                            <div class="si-product">
	                                                <p>200.000 VNĐ <span>x 1</span></p>
	                                                <h6>Đèn mâm ốp đồng</h6>
	                                            </div>
	                                        </td>
	                                        <td class="si-close">
	                                            <a href="#"  ng-click="clear_product($index)" ><i class="far fa-times-circle"></i></a>
	                                        </td>
	                                    </tr>
	                                </table>
	                                <div class="select-total">
	                                    <span>Total:</span>
	                                    <span> 
	                                        <i class="fas fa-dollar-sign"></i>
	                                        <span class="d-inline-block ml-1">200.000 VNĐ </span>
	                                    </span>
	                                </div>
	                                <div class="select-button">
	                                    <a href="resource/pages/cart.php" class="btn btn-dark btn-lg">View card</a>
	                                    <a href="resource/pages/checkout.php" class="btn btn-lg btn-lg-feb"> Check out</a>
	                                </div>
	                            </div>
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
										<li><a href="home" class="active">Trang chủ</a></li>
										<li><a href="about">Giới thiệu</a></li>
										<li>
											<i class="fa fa-angle-right"></i>
											<a href="product">Sản phẩm</a>
											<ul>
												<li><a href="#" class="smooth">Link 2 Lorem ipsum dolor</a></li>
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
									<a href="home" title="" class="logo-word">Vĩnh lộc luxury</a>
								</div>
								<div class="col-lg-5">
									<ul class="menu-right d-flex justify-content-center">
										<li><a href="service">Dịch vụ</a></li>
										<li><a href="construction">Công trình</a></li>
										<li><a href="contact">Liên hệ</a></li>
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
						<div class="mobile-phone col-8">
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
								<a title="" class="img-cart cart-mobile"><img src="/vinhloc/theme/frontend/images/icon/ic-cart-feb.png" alt="error"></a>
								<span class="amount-cart">3</span>
								<div class="cart-hover">
	                                <table class="select-items">
	                                    <tr ng-repeat="c in carts">
	                                        <td class="si-img">
	                                            <img src="/vinhloc/theme/frontend/images/product/061915d98b626d3c3473.jpg" alt="">
	                                        </td>
	                                        <td class="si-content">
	                                            <div class="si-product">
	                                                <p>200.000 VNĐ <span>x 1</span></p>
	                                                <h6>Đèn mâm ốp đồng</h6>
	                                            </div>
	                                        </td>
	                                        <td class="si-close">
	                                            <a href="#"  ng-click="clear_product($index)" ><i class="far fa-times-circle"></i></a>
	                                        </td>
	                                    </tr>
	                                </table>
	                                <div class="select-total">
	                                    <span>Total:</span>
	                                    <span> 
	                                        <i class="fas fa-dollar-sign"></i>
	                                        <span class="d-inline-block ml-1">200.000 VNĐ </span>
	                                    </span>
	                                </div>
	                                <div class="select-button">
	                                    <a href="resource/pages/cart.php" class="btn btn-dark btn-lg">View card</a>
	                                    <a href="resource/pages/checkout.php" class="btn btn-lg-feb btn-lg"> Check out</a>
	                                </div>
	                            </div>
							</div> 
						</div>
						<button class="nav-toggler col-1 pl-0">
				          	<span></span>
				        </button>
					</div>
			        <div class="sticker-menu" id="menu-mobile">
			        	<div class="title">
			        		<a href="resource/pages/login.php" class="ht-login border-left-1px c-fff">
		                        <i class="fas fa-sign-in-alt"></i>
		                        <span class="d-inline-block ml-2">Login</span>
		                    </a>
			        	</div>
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
