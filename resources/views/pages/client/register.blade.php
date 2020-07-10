@extends('layout.client.index')

@section('content')
<main>
    <section class="content-contact pb-5 space-title">
        <div class="container">
            <h2 class="text-center">
                <span class="title-big">Đăng ký</span>
            </h2>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
             @endif
            <section class="s-content">
                <div class="row">
                    <div class="col-md-6 col-lg-6 pt-lg-5 pt-4">
                    <form action="{{route('postRegister')}}" method="POST" role="form">
                            @csrf
                            <div class="row border-2 m-0 pt-5 pb-5">
                                <div class="col-12 form-group">
                                    <label for="" >Họ và tên</label>
                                    <input type="text" name="name" class="form-control" value=""  id="" placeholder="Họ và tên">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="" >Email</label>
                                    <input type="email" name="email" class="form-control" value="" id="" placeholder="Email">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="" >Số điện thoại</label>
                                    <input type="text" name="phone" class="form-control" value="" id="" placeholder="Số điện thoại">
                                </div>
                                <div class="col-12  form-group">
                                    <label for="">Mật khẩu	</label>
                                    <input type="password" name="password" class="form-control" id="" placeholder="Password">
                                </div>
                                <div class="col-12  form-group">
                                    <label for="">Nhập lại mật khẩu	</label>
                                    <input type="password" name="confirm_password" class="form-control" id="" placeholder="Confirm password">
                                </div>

                                <div class="col-12  form-group">
                                    <button type="submit" name="submit" class="btn btn-lg btn-primary btn-lg-feb">Đăng ký </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="d-none d-md-block col-md-6 col-lg-6 pt-lg-5 pt-4">
                        <div class="border-2">
                            <img src="{{url('public')}}/frontend/images/den-nom-2.jpg"  alt="error" />
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</main>
@endsection
