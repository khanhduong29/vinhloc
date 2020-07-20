@extends('layout.client.index')
@section('content')

    
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area mt-45">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('home')}}">Trang chủ</a></li>
                            <li>Chi tiết đơn hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
     <!--shopping cart area start -->
    <div class="shopping_cart_area mt-45">
        <div class="container"> 
            <!-- <form action="#">  -->
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">STT</th>
                                        <th class="product_thumb">Ảnh</th>
                                        <th class="product_name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product_quantity">Số lượng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders -> detail as $k => $det)

                                    <tr>
                                        <td>{{$k+1}}</td>
                                        <td class="product_thumb">
                                            <a href="#">
                                                <img src="{{ asset('public/Uploads') }}/{{$det->getPro->image}}" alt="ảnh">
                                            </a>
                                        </td>
                                        <td class="product_name">
                                            <a href="#">{{$det->getPro->name}}</a>
                                        </td>
                                        <td class="product-price">
                                            £{{number_format($det->price)}}
                                        </td>
                                        <td class="product_quantity">
                                            {{$det->quantity}}
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>   
                        </div>  
                    </div>
                    
                </div>
                 
             </div>
            <!-- </form>  -->
        </div>    
    </div>
     <!--shopping cart area end -->
@stop()