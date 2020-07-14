@extends('layout.admin.index')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Thêm admin</h1> -->
            <section class="content-header">
             <?php $url = url('').'/'.Request::segment(1).'/'?>
             <h5>
               <?php for ($i = 1; $i <= count(Request::segments()) ; $i ++): ?>
                 <?php if ($i > 1): ?>
                  <?php $url .= Request::segment($i).'/'?>
                <?php endif ?>
                <a href ="{{$url}}">
                  {{strtoupper(Request::segment($i))}}
                </a>
                <?php if ($i < count(Request::segments())): ?>
                  <?= '/' ?>
                <?php endif ?>
              <?php endfor ?>
            </h5>
          </section>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('/') }}admin">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form  method="post" role="form" enctype="multipart/form-data">

                <div class="card-body">
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <div class="help-block"></div>
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required >
                    <div class="help-block"></div>
                  </div>
                  <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div class="help-block"></div>
                  </div>
                  <div class="form-group">
                    <label for="">Nhập lại mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="confirm_password" required>
                    <div class="help-block"></div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="full" id="full" class="form-check-input" value="1">
                    <label class="form-check-label" for="full">Full</label>
                    <input type="checkbox" name="customer" id="customer"  class="form-check-input" value="2">
                    <label class="form-check-label" for="customer">Table Customer</label>
                    <input type="checkbox" name="category" id="category" class="form-check-input" value="3">
                    <label class="form-check-label" for="category">Table Category</label>
                    <input type="checkbox" name="product" id="product" class="form-check-input" value="4">
                    <label class="form-check-label" for="product">Table Product</label>
                    <input type="checkbox" name="attr" id="attr" class="form-check-input" value="5">
                    <label class="form-check-label" for="attr">Manager Attribute</label>
                    <input type="checkbox" name="banner" id="banner" class="form-check-input" value="6">
                    <label class="form-check-label" for="banner">Table Banner</label>
                    <input type="checkbox" name="blog" id="blog" class="form-check-input" value="7">
                    <label class="form-check-label" for="blog">Table Blog</label>
                    <input type="checkbox" name="brand" id="brand" class="form-check-input" value="8">
                    <label class="form-check-label" for="brand">Table Brand</label>
                  </div>
                  {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="6" id="exampleCheck1" name="role">
                    <label class="form-check-label" for="exampleCheck1">Full</label>
                    <input type="checkbox" class="form-check-input" value="7" id="exampleCheck1" name="role">
                    <label class="form-check-label" for="exampleCheck1">Table Admin</label>
                    <input type="checkbox" class="form-check-input" value="8" id="exampleCheck1" name="role">
                    <label class="form-check-label" for="exampleCheck1">Table Customer</label>
                    <input type="checkbox" class="form-check-input" value="9" id="exampleCheck1" name="role">
                    <label class="form-check-label" for="exampleCheck1">Table Category</label>
                    <input type="checkbox" class="form-check-input" value="9" id="exampleCheck1" name="role">
                    <label class="form-check-label" for="exampleCheck1">Table Product</label>
                  </div> --}}
                  <div class="form-group">
                    <label for="exampleInputFile">Chọn ảnh admin</label>
                    <div class="input-group">
                      <input type="file" name="file" class="text-center center-block file-upload" accept="image/gif, image/jpeg, image/jpg, image/png"/>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm admin</button>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
              </form>

            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="wrapper">


</div>

@stop()



