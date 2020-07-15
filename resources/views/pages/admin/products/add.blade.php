@extends('layout.admin.index')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Thêm sản phẩm</h1> -->
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
              <li class="breadcrumb-item active">Thêm sản phẩm</li>
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
                    <label for="">Mã sản phẩm</label>
                    <input type="text" class="form-control" id="code" name="code" required placeholder="code">
                    <div class="help-block"></div>
                  </div>
                  <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Name">
                    <div class="help-block"></div>
                  </div>
                  <div class="form-group">
                    <label for="">Loại sản phẩm</label>
                    <select name="cate_id" class="form-control" required>
                      <option value="0">--Chọn loại sản phẩm--</option>
                      @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Chọn ảnh sản phẩm</label>
                    <div class="input-group">
                      <input type="file" name="file" required class="text-center center-block file-upload" accept="image/gif, image/jpeg, image/jpg, image/png"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" class="form-control" id="price" name="price" required placeholder="price">
                    <div class="help-block"></div>
                  </div>
                  <div class="form-group">
                      <label for="">Mô tả</label>
                      <div class="mb-3">
                        <textarea class="textarea" required id="des" name="des" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>
                  </div>
                  @foreach($attributes as $att)
                  <div class="form-group">
                    <label for="">{{$att->name}}</label>
                    <div class="form-check">
                        @foreach($att->attrValue as $attrValues)
                            <input type="checkbox" class="form-check-input" value="{{$attrValues->attribute_id}}" id="exampleCheck1" name="attribute_id[]">
                            <label class="form-check-label" for="exampleCheck1">{{$attrValues->value}}</label>
                        @endforeach
                    </div>
                  </div>
                  @endforeach
                  <div class="form-group">
                    <label for="">Trạng thái</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status">
                        <label class="form-check-label" for="exampleCheck1">Hiện</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
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



