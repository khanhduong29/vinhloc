@extends('layout.client.index')
@section('title','Đèn mâm ốp trần')
@section('content')
<main>
    <section class="hot-pro space-title">
        <div class="container">
            <h2 class="text-center">
                <span class="title-big">Đèn mâm ốp trần</span>
            </h2>
            <section class="show-pro pt-lg-5 pt-4">
                <div class="row">
                    @foreach($products as $pro)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="pt-4">
                            <div class="thumbnail pb-4">
                                <a href="{{route('product-detail',['slug'=>$pro->slug])}}" class="hv-scale p-3 b-ra-30">
                                    <img src="{{asset('public/Uploads/products')}}/{{$pro -> image}}" alt="" width="a"class ="img-fluid">
                                </a>
                                <div class="desc text-center">
                                    <h3>
                                        <a href="{{route('product-detail',['slug'=>$pro->slug])}}" title=""
                                            class="c-fff text-uppercase f-16">{{$pro -> name}}</a>
                                    </h3>
                                    <a href="{{ Route('add_cart',['id'=>$pro->id]) }}" class="add-cart"><img src="{{url('public')}}/frontend/images/icon/ic-cart-feb.png" alt=""></a>
                                    <span class="c-feb f-16 text-uppercase">Giá : {{number_format ($pro -> price)}}</span>
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
