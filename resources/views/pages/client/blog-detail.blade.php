@extends('layout.client.index')

@section('content')
<main class="news select-ctent pd_t40_xs">
	<div class="container">
		<div class="row list-content">
			<div class="col-lg-8 col-xs-12">
				<h1>{{$detail -> name}}</h1>
				<img src="{{asset('public/Uploads')}}/{{$detail -> image}}"
					alt="3 PHONG CÁCH ĐÈN NỘI THẤT KHÔNG BAO GIỜ LỖI THỜI"
					title="3 PHONG CÁCH ĐÈN NỘI THẤT KHÔNG BAO GIỜ LỖI THỜI" class="img_item">
				<div class="word-ctent s-content">
					 {!!$detail->content!!}
				</div>
			</div>
			<div class="col-lg-4 col-xs-12 ">
				<div class="item slick6 border-2">
					@foreach($blg as $value)
					<div class="box">
						<a href="{{route('blog-detail',['slug'=>$value->slug])}}" class="smooth hv-scale">
							<img src="{{asset('public/Uploads')}}/{{$value -> image}}"
								alt="lỗi" title="" class="img-fluid" />
						</a>
						<div class="desc">
							<a href="{{route('blog-detail',['slug'=>$value->slug])}}" title="" class="c-feb f-16 row-1">{{$value -> name}}</a>
							<p class="content_news c-fff f-14 row-3">
								 {!!$value->content!!}
							</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<section class="thumbs-cus space-title">
		<div class="container">
			<h2 class="text-center">
				<span class="title-big">Khách hàng tiêu biểu</span>
			</h2>
			<section class="slick5 pt-lg-5 pt-4 pb-5 wow zoomIn">
				<div>
					<a href="" title="" class="avt">
						<img src="{{url('public')}}/frontend/images/thumbs/02fe85320661ff3fa670.jpg" alt="">
					</a>
				</div>
				<div>
					<a href="" title="" class="avt">
						<img src="{{url('public')}}/frontend/images/thumbs/dabaco-logo.jpg" alt="">
					</a>
				</div>
				<div>
					<a href="" title="" class="avt">
						<img src="{{url('public')}}/frontend/images/thumbs/logo-phuthai.jpg" alt="">
					</a>
				</div>
				<div>
					<a href="" title="" class="avt">
						<img src="{{url('public')}}/frontend/images/thumbs/single-logo.png" alt="">
					</a>
				</div>
				<div>
					<a href="" title="" class="avt">
						<img src="{{url('public')}}/frontend/images/thumbs/tai-xuong-1.jpg" alt="">
					</a>
				</div>
				<div>
					<a href="" title="" class="avt">
						<img src="{{url('public')}}/frontend/images/thumbs/tai-xuong.jpg" alt="">
					</a>
				</div>
				<div>
					<a href="" title="" class="avt">
						<img src="{{url('public')}}/frontend/images/thumbs/tai-xuong.png" alt="">
					</a>
				</div>
				<div>
					<a href="" title="" class="avt">
						<img src="{{url('public')}}/frontend/images/thumbs/thong-tu-quy-dinh-ve-cac-bieu-mau-su-dung-de-xu-phat-vi-pham-hanh-chinh-thuoc-tham-quyen-cua-cong-an-nhan-dan-2.png"
							alt="">
					</a>
				</div>
			</section>
		</div>
	</section>
</main>
@endsection
