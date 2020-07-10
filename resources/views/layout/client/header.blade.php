<div class="back-top" onclick="fc_top()" id="icon-back-top">
    <img src="{{url('public')}}/frontend/images/icon/ic-btop.png" alt="">
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
                @if(Auth::User() == null)
                    <a href="{{route('login')}}" class="pr-2  c-fff">
                        <span class="d-inline-block ml-2">Đăng nhập</span>
                    </a>
                    <a href="{{route('register')}}" class="border-left pl-2 c-fff">
                        <span class="d-inline-block ml-2">Đăng ký</span>
                    </a>
                @else
                <a href="" class="pr-2  c-fff">
                    <span class="d-inline-block ml-2">{{Str::limit(Auth::user()->name,8)}}</span>
                </a>
                <a href="{{route('log-out')}}" class="border-left pl-2 c-fff">
                    <span class="d-inline-block ml-2">Đăng xuat</span>
                </a>
                @endif
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
                            <form action="" method="get">
                                <input type="text" name="q" placeholder="Tìm kiếm sản phẩm ..." value="">
                                <button type="submit" value="search"></button>
                            </form>
                        </div>
                        <a  title="" class="img-cart cart-lap"><img src="{{url('public')}}/frontend/images/icon/ic-cart-feb.png" alt="error"></a>
                        <span class="amount-cart">3</span>
                        <div class="cart-hover">
                            <table class="select-items">
                                <tr ng-repeat="c in carts">
                                    <td class="si-img">
                                        <a href=""><img src="{{url('public')}}/frontend/images/product/061915d98b626d3c3473.jpg" alt=""></a>
                                    </td>
                                    <td class="si-content">
                                        <div class="si-product">
                                            <p>200.000 VNĐ <span>x 1</span></p>
                                            <h6><a href="">Đèn mâm ốp đồng</a></h6>
                                        </div>
                                    </td>
                                    <td class="si-close">
                                        <a href="#"  ng-click="clear_product($index)" ><i class="far fa-times-circle"></i></a>
                                    </td>
                                </tr>
                            </table>
                            <div class="select-total">
                                <span>Tổng:</span>
                                <span>
                                    <span class="d-inline-block ml-1">200.000 VNĐ </span>
                                </span>
                            </div>
                            <div class="select-button">
                                <a href="{{route('cart')}}" class="btn btn-dark btn-lg">Giỏ hàng</a>
                                <a href="{{route('checkout')}}" class="btn btn-lg btn-lg-feb">Thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="header-menu" id="header">
            <div class="container">
                <img src="{{url('public')}}/frontend/images/logo1.png" class="logo" alt="">
                <div class="body-sticker text-center">
                    <div class="row">
                        <div class="col-lg-5">
                            <ul class="menu-left d-flex justify-content-center">
                            <li><a href="{{route('home')}}" class="active">Trang chủ</a></li>
                                <li><a href="{{route('about')}}">Giới thiệu</a></li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="{{route('product')}}">Sản phẩm</a>
                                    <ul>
                                        <li><a href="#" class="smooth">Link 1</a></li>
                                        <li>
                                            <i class="fa fa-angle-right"></i>
                                            <a href="#" class="smooth">Link 2</a>
                                            <ul>
                                                <li><a href="news-detail.html" class="smooth">Link 1</a></li>
                                                <li><a href="news-detail.html" class="smooth">Link 2</a></li>
                                                <li><a href="news-detail.html" class="smooth">Link 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" class="smooth">Link 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2">
                            <a href="home" title="" class="logo-word">Vĩnh lộc luxury</a>
                        </div>
                        <div class="col-lg-5">
                            <ul class="menu-right d-flex justify-content-center">
                                <li><a href="{{route('service')}}">Dịch vụ</a></li>
                                <li><a href="{{route('construction')}}">Công trình</a></li>
                                <li><a href="{{route('contact')}}">Liên hệ</a></li>
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
                    <a href="home" title="" class="logo-mobile">
                        <img src="{{url('public')}}/frontend/images/logo-ft.png" alt="">
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
                        <a title="" class="img-cart cart-mobile"><img src="{{url('public')}}/frontend/images/icon/ic-cart-feb.png" alt="error"></a>
                        <span class="amount-cart">3</span>
                        <div class="cart-hover">
                            <table class="select-items">
                                <tr ng-repeat="c in carts">
                                    <td class="si-img">
                                        <a href=""><img src="{{url('public')}}/frontend/images/product/061915d98b626d3c3473.jpg" alt=""></a>
                                    </td>
                                    <td class="si-content">
                                        <div class="si-product">
                                            <p>200.000 VNĐ <span>x 1</span></p>
                                            <h6><a href="">Đèn mâm ốp đồng</a></h6>
                                        </div>
                                    </td>
                                    <td class="si-close">
                                        <a href="#"  ng-click="clear_product($index)" ><i class="far fa-times-circle"></i></a>
                                    </td>
                                </tr>
                            </table>
                            <div class="select-total">
                                <span>Tổng:</span>
                                <span>
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
                    <a href="login" class="ht-login border-left-1px c-fff">
                        <i class="fas fa-sign-in-alt"></i>
                        <span class="d-inline-block ml-2">Đăng nhập</span>
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
                    <li><a href="home">Trang chủ</a></li>
                    <li><a href="about">Giới thiệu</a></li>
                    <li>
                        <i class="change-down fa fa-angle-right"></i>
                        <a href="product">Sản phẩm</a>
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
                    <li><a href="service">Dịch vụ</a></li>
                    <li><a href="construction">Cồng trình</a></li>
                    <li><a href="contact">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header><!-- /header -->
