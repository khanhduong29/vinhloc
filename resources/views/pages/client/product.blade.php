@extends('layout.client.index')
@section('title','Sản phẩm')
@section('content')
<main>
    <section class="contain-pro-detail">
        <div class="container">
            <h2 class="text-center">
                <span class="title-big c-fff">Sản phẩm</span>
            </h2>
           <form action="{{route('filter')}}" method="GET" accept-charset="utf-8" class="filter-pro d-lg-flex d-md-flex justify-content-center mt-5" id="form_order">

                <select class="js-example-basic-single m-2" name="cate" >
                    <option value="">-----Chọn Danh mục-----</option>
                    @foreach($categories as $cate)
                    <option value="{{$cate->id}}">{{$cate -> name}}</option>
                    @endforeach
                </select>
                <input type="hidden" name="price2" id="price2">
                <select class="js-example-basic-single m-2" name="price" id="price" >
                    <option value="-1">-----Chọn giá-----</option>
                    <option value="0" data-giatri2="100000">Dưới 100.000</option>
                    <option value="100000" data-giatri2="250000">Từ 100.000 đến 250.000</option>
                    <option value="250000" data-giatri2="500000">Từ 250.000 đến 500.000</option>
                    <option value="500000" data-giatri2="1000000">Từ 500.000 đến 1.000.000</option>
                    <option value="1000000" data-giatri2="">Trên 1.000.000</option>
                    <!-- <option value="350000" data-giatri2="500000">Từ 350000 đến 500000</option> -->
                </select>
                <select class="js-example-basic-single m-2" name="order">
                    <option value="0">Giá giảm dần </option>
                    <option value="1">Giá tăng dần</option>
                </select>
                <button type="submit" class="btn btn-primary btn-lg-feb btn-filter">Lọc sản phẩm</button>
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
