@extends('layout.client.index')

@section('content')
<main>
    <section class="contain-pro-detail">
        <div class="container">
            <h2 class="text-center">
                <span class="title-big c-fff">Sản phẩm</span>
            </h2>
            <form action="{{route('orderby')}}" method="get" accept-charset="utf-8" class="filter-pro d-lg-flex d-md-flex justify-content-center mt-5" id="form_order">
                <select class="js-example-basic-single m-2" id="cate">
                    @foreach($categories as $cate)
                    <option value="{{$cate->id}}">{{$cate -> name}}</option>
                    @endforeach
                </select>
                <select class="js-example-basic-single m-2" id="giasp">
                    <option value="">---Chọn giá sản phẩm---</option>
                    <option value="" data-giatri1="250000" data-giatri2="300000">Từ 250000 đến 300000</option>
                    <option value="" data-giatri1="300000" data-giatri2="350000">Từ 300000 đến 350000</option>
                    <option value="" data-giatri1="350000" data-giatri2="500000">Từ 350000 đến 500000</option>
                </select>
                <select class="js-example-basic-single m-2" id ="orderby" name="order">
                    <option value="">---Sắp xếp theo---</option>
                    <option value="1">Giá giảm dần </option>
                    <option value="2">Giá tăng dần</option>
                    <option value="3">Tên sản phẩm</option>
                </select>
            </form>
            <section class="show-pro pt-lg-5 pt-4">
                <div class="row"  id="content">
                    @foreach($products as $pro)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="pt-4">
                            <div class="thumbnail pb-4">
                                <a href="{{route('product-detail',['slug'=>$pro->slug])}}" class="hv-scale p-3 b-ra-30">
                                    <img src="{{asset('public/Uploads')}}/{{$pro -> image}}" alt="" width="a"class ="img-fluid">
                                </a>
                                <div class="desc text-center">
                                    <h3>
                                        <a href="{{route('product-detail',['slug'=>$pro->slug])}}" title="" class="c-fff text-uppercase f-16">{{$pro -> name}}</a>
                                    </h3>
                                    <span class="c-feb f-16 text-uppercase">Giá : {{number_format ($pro -> price)}}</span>
                                    <a href="{{ Route('add_cart',['id'=>$pro->id]) }}" class="add-cart"><img src="{{url('public')}}/frontend/images/icon/ic-cart-feb.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pagination">{{$products->links()}}</div>

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
