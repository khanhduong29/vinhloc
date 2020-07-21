@extends('layout.client.index')

@section('content')
<main>
	<section class="content-contact pb-5 space-title">
		<div class="container">
			<h2 class="text-center">
				<span class="title-big">Đổi mật khẩu</span>
            </h2>
			<section class="s-content">
            <div class="row">
                <div class="d-none d-md-block col-md-6 col-lg-6 pt-lg-5 pt-4">
                    <div class="border-2">
                        <img src="{{url('public')}}/frontend/images/img-ctnw.png"  alt="error" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 pt-lg-5 pt-4">
                    <form action="{{route('getResetPassword')}}" name="login" method="POST" role="form">
                        @csrf
                        <div class="row border-2 m-0 pt-5 pb-5">
                            <div class="col-12 form-group">
                                <label for="" >Email</label>
                                <input type="email" name="email" class="form-control" value="{{$email}}" id="" placeholder="Email">
                            </div>
                            <div class="col-12  form-group">
                                <label for="">Mật khẩu mới</label>
                                <input type="password" name="password_new" class="form-control" id="" placeholder="Mật Khẩu">
                                @error('password_new')
                                    <span class="error-message">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-12  form-group">
                                <label for="">Nhập lại mật khẩu mới</label>
                                <input type="password" name="confirm_password_new" class="form-control" id="" placeholder="Xác nhận mật khẩu">
                                @error('confirm_password_new')
                                    <span class="error-message">{{$message}}</span>
                                @enderror
                            </div>
                            <input type="hidden" name="code" value="{{$code}}">
                            <div class="col-4 form-group">
                                <button type="submit" class="btn btn-lg btn-primary btn-lg-feb">Đổi mật khẩu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
			</section>
		</div>
	</section>
</main>
@endsection
