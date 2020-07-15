@extends('layout.client.index')

@section('content')
<main>
	<section class="content-contact pb-5 space-title">
		<div class="container">
			<h2 class="text-center">
				<span class="title-big">Đăng nhập</span>
            </h2>
			<section class="s-content">
				<div class="row">
					<div class="d-none d-md-block col-md-6 col-lg-6 pt-lg-5 pt-4">
						<div class="border-2">
                            <img src="{{url('public')}}/frontend/images/img-ctnw.png"  alt="error" />
						</div>
                    </div>
					<div class="col-md-6 col-lg-6 pt-lg-5 pt-4">
                        <form action="{{route('postLogin_user')}}" name="login" method="POST" role="form">
                            @csrf
							<div class="row border-2 m-0 pt-5 pb-5">
								<div class="col-12 form-group">
									<label for="" >Email</label>
                                    <input type="email" name="email" class="form-control" value="{{old('email')}}" id="" placeholder="Email">
                                   @error('email')
                                        <span class="error-message">{{$message}}</span>
                                   @enderror
								</div>
								<div class="col-12  form-group">
									<label for="">Mật khẩu	</label>
                                    <input type="password" name="password" class="form-control" id="" placeholder="Password">
                                    @error('password')
                                    <span class="error-message">{{$message}}</span>
                               @enderror
                               @if (Session::has('message'))
                                    <span class="error-message">{{ Session::get('message') }}</span>
                                @endif
                                </div>
								<div class="col-12  form-group">
									<button type="submit" name="submit" class="btn btn-lg btn-primary btn-lg-feb">Đăng nhập</button>
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
