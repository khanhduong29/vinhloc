@extends('layout.admin.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Thêm banner</h1> -->
            <section class="content-header">
              <h5>Thêm banner</h5>
            </section>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('/') }}admin">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm banner</li>
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
              <!-- /.card-header -->
              <!-- form start -->

              <form  method="post" role="form" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Tên</label>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Nhập tên ">
                    <div class="help-block"></div>
                  </div>
                  <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" class="form-control" id="link" name="link" required placeholder="Nhập link">
                  </div>
                  <div class="form-group">
                    <label for="">location</label>
                    <select name="location" class="form-control" required>
                      <option>--Chọn vị trí--</option>
                      <option value="1">Trang chủ</option>
                      <option value="2">Giới thiệu</option>
                      <option value="3">Dịch vụ</option>
                      <option value="4">Liên hệ</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Chọn ảnh sản phẩm</label>
                    <div class="input-group">
                      <input type="file" name="file" class="text-center center-block file-upload" required accept="image/gif, image/jpeg, image/jpg, image/png"/>  
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status">
                    <label class="form-check-label" for="exampleCheck1">Hiện</label>
                  </div> 
                </div>
                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm banner</button>
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



