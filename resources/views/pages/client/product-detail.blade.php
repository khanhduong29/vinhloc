@extends('layout.client.index')

@section('content')
<main>
    <section class="contain-pro-detail">
        <div class="container">
            <h2 class="text-center">
                <span class="title-big c-fff">Chi tiết sản phẩm</span>
            </h2>
            <section class="pro-detail pt-4">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="border-1 mt-2 mb-4">
                            <a href="" title="" class="img-detail">
                                <img src="{{asset('public/Uploads/products')}}/{{$pro -> image}}" alt="">

                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="s-content">
                            <h1 class="c-fff f-24">{{$pro -> name}}</h1>
                            <span class="c-feb font-weight-bold f-18">
                               Giá sản phẩm: {{number_format ($pro -> price)}}
                            </span>
                            <ul>
                                <li>
                                    <span class="tb1">Xuất xứ: </span>
                                    <span class="tb2">Đài Loan</span>
                                </li>
                                <li>
                                    <span class="tb1">Thương hiệu: </span>
                                    <span class="tb2">Vĩnh Lộc Luxury</span>
                                </li>
                                <li>
                                     <span class="tb1">Chất liệu : </span>
                                     <span class="tb2">Đồng nguyên chất</span>
                                 </li>
                                 <li>
                                     <span class="tb1">Kích thước : </span>
                                     <span class="tb2">Ø450 mm</span>
                                 </li>
                                 <li>
                                     <span class="tb1">Công suất : </span>
                                     <span class="tb2">8W</span>
                                 </li>
                                 <li>
                                     <span class="tb1">Ứng dụng : </span>
                                     <span class="tb2">Trang trí chung cư, biệt thự, penthouse theo phong cách Cổ Điển</span>
                                 </li>
                                 <li>
                                     <span class="tb1">Bảo hành : </span>
                                     <span class="tb2">24 tháng</span>
                                 </li>
                            </ul>

                            <a href="{{ Route('add_cart',['id'=>$pro->id]) }}" title="" class="btn btn-lg-feb btn-cart">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="hot-pro space-title">
        <div class="container">
            <h2 class="text-center">
                <span class="title-big">Sản phẩm tương tự</span>
            </h2>
            <section class="slick3 pt-lg-5 pt-4 wow fadeInUp">
                <div class="pt-2">
                    <div class="thumbnail pb-4">
                        <a href="" class="hv-scale p-3 b-ra-30">
                            <img src="{{url('public')}}/frontend/images/product/8b1b1592df0d3953601c.jpg" class="img-fluid"  alt="a" />
                        </a>
                        <div class="desc text-center">
                            <h3>
                                <a href="" title="" class="c-fff text-uppercase f-16">Đèn chùm pha lê</a>
                            </h3>
                            <span class="c-feb f-16 text-uppercase">Liên hệ</span>
                        </div>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="thumbnail pb-4">
                        <a href="" class="hv-scale p-3 b-ra-30">
                            <img src="{{url('public')}}/frontend/images/product/9717852538bddee387ac.jpg" class="img-fluid"  alt="a" />
                        </a>
                        <div class="desc text-center">
                            <h3>
                                <a href="" title="" class="c-fff text-uppercase f-16">Đèn chùm pha lê</a>
                            </h3>
                            <span class="c-feb f-16 text-uppercase">Liên hệ</span>
                        </div>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="thumbnail pb-4">
                        <a href="" class="hv-scale p-3 b-ra-30">
                            <img src="{{url('public')}}/frontend/images/product/bc7a454119fdffa3a6ec.jpg" class="img-fluid"  alt="a" />
                        </a>
                        <div class="desc text-center">
                            <h3>
                                <a href="" title="" class="c-fff text-uppercase f-16">Đèn chùm pha lê</a>
                            </h3>
                            <span class="c-feb f-16 text-uppercase">Liên hệ</span>
                        </div>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="thumbnail pb-4">
                        <a href="" class="hv-scale p-3 b-ra-30">
                            <img src="{{url('public')}}/frontend/images/product/feb2ffd14249a417fd581.jpg" class="img-fluid"  alt="a" />
                        </a>
                        <div class="desc text-center">
                            <h3>
                                <a href="" title="" class="c-fff text-uppercase f-16">Đèn chùm pha lê</a>
                            </h3>
                            <span class="c-feb f-16 text-uppercase">Liên hệ</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="thumbs-cus space-title">
        <div class="container">
            <h2 class="text-center">
                <span class="title-big">Khách hàng tiêu biểu</span>
            </h2>
            <section class="slick5 pt-lg-5 pt-4 pb-5 wow zoomIn">
                @foreach($brand as $value)
                <div>
                    <a href="" title="" class="avt">
                        <img src="{{asset('public/Uploads')}}/{{$value -> image}}" alt="">
                    </a>

                </div>
                @endforeach
            </section>
        </div>
    </section>
</main>
@endsection
