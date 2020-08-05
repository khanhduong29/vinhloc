@extends('layout.client.index')
@section('title','Giỏ hàng')
@section('content')
<main>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<section class="container cart space-title">
		<h2 class="text-center title-cart mb-5">
			<span class="title-big">Giỏ Hàng</span>
		</h2>
		@if($cart -> items)
		<div class="cart-table table-responsive">
			<table class="table-bordered">
				<thead>
					<tr>
						<th>Ảnh</th>
						<th>Tên sản phẩm</th>
						<th>Giá</th>
						<th>Số lượng</th>
						<th>Tổng</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					@if(count($cart->items))
                    @foreach($cart -> items as $item)
                    @php
                        $thanhtien = $item['price']*$item['quantity'];
                    @endphp
					<tr>
						<td class="cart-pic">
							<a href="">
                            <img src="{{ asset('public/Uploads/products') }}/{{$item['image']}}" alt="error">
                            <!-- <img src="{{url('public')}}/frontend/images/product/8b1b1592df0d3953601c.jpg" alt="error"> -->
							</a>
						</td>
						<td class="">
							<a href="">
								<p>{{$item['name']}}</p>
								<!-- <p>Den chum</p> -->
							</a>
						</td>
                    <td class="price-root"><span id="price-{{$item['id']}}">{{number_format($item['price'])}}</span> VNĐ</td>
						<td>
							<div class="quantity">
								<div class="pro-qty">
                                    <input type="number" onkeyup="onChangeQuantity(event)" value="{{$item['quantity']}}" min="1" class="qty" id="{{$item['id']}}" placeholder="Quantity">
								</div>
							</div>
						</td>
                    <td class="price"><span id="total-{{$item['id']}}"  class="totalForProduct">{{number_format($thanhtien)}}</span> VND</td>
						<td>
							<a href="{{route('delete-cart',['id'=>$item['id']])}}"><i class="fas fa-times"></i></a>
						</td>
					</tr>
					@endforeach
                    @endif
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="discount-coupon">
					<div class="cart-buttons">
						<a href="{{route('product')}}" class="primary-btn continue-shop text-center">Tiếp tục mua sắm</a>
						<a href="{{route('clear-cart')}}" class="btn-danger text-center clear-cart" onclick="return confirm('Xác nhận xoá ?')">Xóa giỏ hàng</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 offset-lg-4">
				<div class="proceed-checkout">
					<ul>
						<li class="subtotal">Số lượng sản phẩm <span class="sumCa" id="total-number-product">{{$cart->total_quantity}}</span></li>
						<li class="cart-total">Tổng tiền <span class="sumCa"><strong id="total-amount">{{number_format($cart->total_amount)}}</strong> VND</span></li>
					</ul>
					<a href="{{route('checkout')}}" class="proceed-btn">Thanh toán</a>
				</div>
			</div>
		</div>
		@else
		<div class="panel-body mb-5">
            <div class="alert alert-danger">
                <strong>Giỏ hàng của bạn đang trống!</strong> Nhấn <a href="{{route('product')}}">vào đây</a> để mua hàng ....
            </div>
        </div>
		@endif
	</section>
</main>
@endsection
