 @extends('layout.admin.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Sửa user</h1> -->
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
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sửa admin</li>
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
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post" role="form" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" id="name" value="{{$admin->name}}"  name="name" required placeholder="Name">
                    <div class="help-block"></div>
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="email" value="{{$admin->email}}"  name="email" required placeholder="email">
                    <div class="help-block"></div>
                  </div>
                  <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" value="{{$admin->password}}"  name="password" required placeholder="password">
                    <div class="help-block"></div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Chọn ảnh</label>
                    <div class="input-group">
                      <input type="file" name="file" class="form-control mb-3" accept="image/gif, image/jpeg, image/jpg, image/png"/>
                    </div>
                    <img src="{{asset('public/Uploads')}}/{{$admin-> avatar}}" class="d-block" alt="Chưa có hình ảnh" width="120">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="full" id="full" class="form-check-input" value="1" {{ in_array(1,$arr_role) ?"checked" : ""}}>
                    <label class="form-check-label" for="exampleCheck1">Full</label>
                    <input type="checkbox" name="customer" id="customer"  class="form-check-input" value="2" {{ in_array(2,$arr_role) ?"checked" : ""}}>
                    <label class="form-check-label" for="exampleCheck1">Table Customer</label>
                    <input type="checkbox" name="category" id="category" class="form-check-input" value="3" {{ in_array(3,$arr_role) ?"checked" : ""}}>
                    <label class="form-check-label" for="exampleCheck1">Table Category</label>
                    <input type="checkbox" name="product" id="product" class="form-check-input" value="4" {{ in_array(4,$arr_role) ?"checked" : ""}}>
                    <label class="form-check-label" for="exampleCheck1">Table Product</label>
                    <input type="checkbox" name="attr" id="attr" class="form-check-input" value="5" {{ in_array(5,$arr_role) ?"checked" : ""}}>
                    <label class="form-check-label" for="attr">Manager Attribute</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="banner" id="banner" class="form-check-input" value="6" {{ in_array(6,$arr_role) ?"checked" : ""}}>
                    <label class="form-check-label" for="exampleCheck1">Table Banner</label>
                    <input type="checkbox" name="blog" id="blog" class="form-check-input" value="7" {{ in_array(7,$arr_role) ?"checked" : ""}}>
                    <label class="form-check-label" for="exampleCheck1">Table Blog</label>
                    <input type="checkbox" name="brand" id="brand" class="form-check-input" value="8" {{ in_array(8,$arr_role) ?"checked" : ""}}>
                    <label class="form-check-label" for="exampleCheck1">Table Brand</label>
                    <input type="checkbox" name="construction" id="construction" class="form-check-input" value="9" {{ in_array(9,$arr_role) ?"checked" : ""}}>
                    <label class="form-check-label" for="exampleCheck1">Table Construction</label>
                    <input type="checkbox" name="config" id="config" class="form-check-input" value="10" {{ in_array(10,$arr_role) ?"checked" : ""}}>
                    <label class="form-check-label" for="exampleCheck1">Table Config</label>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Sửa admin</button>
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
  <script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->

@stop()



