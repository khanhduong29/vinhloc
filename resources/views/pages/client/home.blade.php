@extends('layout.client.index')
@section('content')
<main>
    <div class="container">
        <section class="slick0 big-carousel">
            @foreach($banners as $ban )
                @if($ban -> location == 1)
                <a href="" title="">
                    <img src="{{url('public/uploads/banner')}}/{{$ban -> image}}" alt="">
                </a>
                @endif
            @endforeach
        </section>
    </div>
    <section class="cat-pro space-title">
        <div class="container">
            <h2 class="text-center">
                <span class="title-big">Các dòng sản phẩm</span>
            </h2>
            <section class="slick1 pt-lg-5 pt-4 wow fadeInUp">
               @foreach($categories as $cate )
                <div class="pt-2">
                    <div class="thumbnail">
                        <a href="" class="hv-scale p-3">
                            <img src="{{asset('public/Uploads')}}/{{$cate -> image}}"  alt="a" />
                        </a>
                        <div class="desc text-center">
                            <div class="img">
                                <img src="{{url('public')}}/frontend/images/thumbs-cat/untitled-1.png" alt="">
                            </div>
                            <h3 class="m-0">
                                <a href="" title="">{{$cate->name}}</a>
                            </h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </section>
        </div>
    </section>
    <section class="representative space-title">
        <div class="container">
            <h2 class="text-center">
                <span class="title-big">Công trình tiêu biểu</span>
            </h2>
            <div role="tabpanel" class="pt-lg-5 pt-4">
                <ul class="nav nav-tabs" role="tablist">
                    @foreach($con as $value)
                    <li role="presentation" class="nav-item">
                        <a href="#{{$value -> name}}" aria-controls="{{$value -> name}}" role="tab" data-toggle="tab" class="nav-link">{{$value -> name}}</a>
                    </li>
                    @endforeach
                </ul>

                <div class="tab-content pt-lg-5 pt-4">
                    @foreach($con as $key => $value)
                        @if($key === 0)
                            <div role="tabpanel" class="tab-pane active list-pro" id="{{$value -> name}}">
                                <div class="slick2 sublist imglist">
                                @foreach(json_decode($value->image) as $img)
                                    <div class="item">
                                        <a href="{{asset('public/Uploads/'.$img)}}" class="smooth hv-scale" title="Ảnh nhà hàng" data-fancybox="gallery">
                                            <img src="{{asset('public/Uploads/'.$img)}}" alt="Ảnh nhà hàng" title="Ảnh nhà hàng" class="img-fluid" />
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="desc d-none d-md-block d-lg-block">
                                    <h3>
                                        <a title="CÁC DỰ ÁN NHÀ HÀNG VÀ KHÁCH SẠN NỔI BẬT ĐÃ ĐƯỢC VĨNH LỘC LUXURY THIẾT KẾ VÀ THI CÔNG">{{$value -> title}}</a>
                                    </h3>
                                    <p class="c-fff f-14 row-4">{{$value -> des}}</p>
                                </div>
                            </div>
                        @else
                        <div role="tabpanel" class="tab-pane list-pro" id="{{$value -> name}}">
                            <div class="slick2 sublist imglist">
                            @foreach(json_decode($value->image) as $img)
                                <div class="item">
                                    <a href="{{asset('public/Uploads/'.$img)}}" class="smooth hv-scale" title="Ảnh nhà hàng" data-fancybox="gallery">
                                        <img src="{{asset('public/Uploads/'.$img)}}" alt="Ảnh nhà hàng" title="Ảnh nhà hàng" class="img-fluid" />
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="desc d-none d-md-block d-lg-block">
                                <h3>
                                    <a title="CÁC DỰ ÁN NHÀ HÀNG VÀ KHÁCH SẠN NỔI BẬT ĐÃ ĐƯỢC VĨNH LỘC LUXURY THIẾT KẾ VÀ THI CÔNG">{{$value -> title}}</a>
                                </h3>
                                <p class="c-fff f-14 row-4">{{$value -> des}}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    <!-- <div role="tabpanel" class="tab-pane list-pro" id="tab1">
                        <div class="slick2 sublist imglist">
                                <div class="item">
                                <a href="{{url('public')}}/frontend/images/slide/bn-ctent.jpg" class="smooth hv-scale" title="Ảnh nhà hàng" data-fancybox="gallery">
                                    <img src="{{url('public')}}/frontend/images/slide/bn-ctent.jpg" alt="Ảnh nhà hàng" title="Ảnh nhà hàng" class="img-fluid" />
                                </a>
                                </div>
                                <div class="item">
                                <a href="{{url('public')}}/frontend/images/slide/slide3.jpg" class="smooth hv-scale" title="Ảnh nhà hàng" data-fancybox="gallery">
                                    <img src="{{url('public')}}/frontend/images/slide/slide3.jpg" alt="Ảnh nhà hàng" title="Ảnh nhà hàng" class="img-fluid" />
                                </a>
                                </div>
                                <div class="item">
                                <a href="{{url('public')}}/frontend/images/slide/slide0.jpg" class="smooth hv-scale" title="Ảnh nhà hàng" data-fancybox="gallery">
                                    <img src="{{url('public')}}/frontend/images/slide/slide0.jpg" alt="Ảnh nhà hàng" title="Ảnh nhà hàng" class="img-fluid" />
                                </a>
                                </div>
                                <div class="item">
                                <a href="{{url('public')}}/frontend/images/slide/slide1.jpg" class="smooth hv-scale" title="Ảnh nhà hàng"data-fancybox="gallery" >
                                    <img src="{{url('public')}}/frontend/images/slide/slide1.jpg" alt="Ảnh nhà hàng" title="Ảnh nhà hàng" class="img-fluid" />
                                </a>
                                </div>
                            </div>
                            <div class="desc d-none d-md-block d-lg-block">
                                <h3>
                                    <a title="CÁC DỰ ÁN NHÀ HÀNG VÀ KHÁCH SẠN NỔI BẬT ĐÃ ĐƯỢC VĨNH LỘC LUXURY THIẾT KẾ VÀ THI CÔNG">CÁC DỰ ÁN NHÀ HÀNG VÀ KHÁCH SẠN NỔI BẬT ĐÃ ĐƯỢC VĨNH LỘC LUXURY THIẾT KẾ VÀ THI CÔNG</a>
                                </h3>
                                <p class="c-fff f-14 row-4">Quý khách đang tìm mọi địa chỉ uy tín cung cấp các sản phẩm hiện đại, Các dự án nhà hàng và khách sạn nổi bật đã được vĩnh lộc Luxury thiết kế và thi công Các dự án nhà hàng và khách sạn nổi </p>
                            </div>
                        </div>
                    <div role="tabpanel" class="tab-pane list-pro" id="tab2">
                        <div class="slick2 sublist imglist">
                           @foreach(json_decode($value->image) as $img)
                        <div class="item">
                           <a href="" class="smooth hv-scale" title="Ảnh nhà hàng">
                              <img src="{{asset('public/Uploads/'.$img)}}" alt="Ảnh nhà hàng" title="Ảnh nhà hàng" class="img-fluid" />
                           </a>
                        </div>
                            @endforeach
                        </div>
                        <div class="desc d-none d-md-block d-lg-block">
                            <h3>
                                <a title="CÁC DỰ ÁN NHÀ HÀNG VÀ KHÁCH SẠN NỔI BẬT ĐÃ ĐƯỢC VĨNH LỘC LUXURY THIẾT KẾ VÀ THI CÔNG">CÁC DỰ ÁN NHÀ HÀNG VÀ KHÁCH SẠN NỔI BẬT ĐÃ ĐƯỢC VĨNH LỘC LUXURY THIẾT KẾ VÀ THI CÔNG</a>
                            </h3>
                            <p class="c-fff f-14 row-4">Quý khách đang tìm mọi địa chỉ uy tín cung cấp các sản phẩm hiện đại, Các dự án nhà hàng và khách sạn nổi bật đã được vĩnh lộc Luxury thiết kế và thi công Các dự án nhà hàng và khách sạn nổi </p>
                            </div>
                    </div>
                    <div role="tabpanel" class="tab-pane list-pro" id="tab3">
                        <div class="slick2 sublist imglist">
                            <div class="item">
                                <a href="{{url('public')}}/frontend/images/slide/bn-ctent.jpg" class="smooth hv-scale" title="Ảnh nhà hàng" data-fancybox="gallery">
                                    <img src="{{url('public')}}/frontend/images/slide/bn-ctent.jpg" alt="Ảnh nhà hàng" title="Ảnh nhà hàng" class="img-fluid" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{url('public')}}/frontend/images/slide/slide3.jpg" class="smooth hv-scale" title="Ảnh nhà hàng" data-fancybox="gallery">
                                    <img src="{{url('public')}}/frontend/images/slide/slide3.jpg" alt="Ảnh nhà hàng" title="Ảnh nhà hàng" class="img-fluid" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{url('public')}}/frontend/images/slide/slide0.jpg" class="smooth hv-scale" title="Ảnh nhà hàng" data-fancybox="gallery">
                                    <img src="{{url('public')}}/frontend/images/slide/slide0.jpg" alt="Ảnh nhà hàng" title="Ảnh nhà hàng" class="img-fluid" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{url('public')}}/frontend/images/slide/slide1.jpg" class="smooth hv-scale" title="Ảnh nhà hàng"data-fancybox="gallery" >
                                    <img src="{{url('public')}}/frontend/images/slide/slide1.jpg" alt="Ảnh nhà hàng" title="Ảnh nhà hàng" class="img-fluid" />
                                </a>
                            </div>
                        </div>
                        <div class="desc d-none d-md-block d-lg-block">
                            <h3>
                                <a title="CÁC DỰ ÁN NHÀ HÀNG VÀ KHÁCH SẠN NỔI BẬT ĐÃ ĐƯỢC VĨNH LỘC LUXURY THIẾT KẾ VÀ THI CÔNG">CÁC DỰ ÁN NHÀ HÀNG VÀ KHÁCH SẠN NỔI BẬT ĐÃ ĐƯỢC VĨNH LỘC LUXURY THIẾT KẾ VÀ THI CÔNG</a>
                            </h3>
                            <p class="c-fff f-14 row-4">Quý khách đang tìm mọi địa chỉ uy tín cung cấp các sản phẩm hiện đại, Các dự án nhà hàng và khách sạn nổi bật đã được vĩnh lộc Luxury thiết kế và thi công Các dự án nhà hàng và khách sạn nổi </p>
                            </div>
                    </div> -->
                </div>

            </div>
        </div>
    </section>
    <section class="hot-pro space-title">
        <div class="container">
            <h2 class="text-center">
                <span class="title-big">Sản phẩm nổi bật</span>
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
    <section class="share space-title">
        <div class="container">
            <h2 class="text-center pb-4">
                <span class="title-big">Góc chia sẻ</span>
            </h2>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 mb-4">
                    @foreach($blog as $blg)
                    <div class="item">
                        <a href="{{route('blog-detail',['slug'=>$blg->slug])}}" class="smooth hv-scale" title="">
                            <img src="{{asset('public/Uploads')}}/{{$blg -> image}}" alt="lỗi" title="" class="img-fluid" />
                        </a>
                        <div class="desc s-content mt-2">
                            <h3>
                                <a href="{{route('blog-detail',['slug'=>$blg->slug])}}" title="" class="c-feb f-18 row-2">{{$blg -> name }}</a>
                            </h3>
                            <span class="date">{{$blg -> created_at}} - 65 lượt xem</span>
                            <div class="content_news c-fff row-6">
                                {!!Str::limit($blg->des,350)!!}
                            </div>
                        </div>
                    </div>
                    @break;
                    @endforeach
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12 mb-4">
                    <div class="item slick4">
                        @foreach($blog as $value)
                        <div class="box">
                            <a href="{{route('blog-detail',['slug'=>$value->slug])}}" class="smooth hv-scale">
                                <img src="{{asset('public/Uploads')}}/{{$value -> image}}" class="img-fluid"/>
                            </a>
                            <div class="desc">
                                <a href="{{route('blog-detail',['slug'=>$value->slug])}}" title="" class="c-feb f-16 row-2">{{$value -> name}}</a>
                                <div class="content_news c-fff f-14 row-2">
                                    {!!Str::limit($value->des,250)!!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
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

