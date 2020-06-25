
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sửa sản phẩm</li>
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
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post" role="form" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="name_pro" name="name_pro" value="{{$models->name_pro}}" placeholder="Nhập tên sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="">Giá</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$models->price}}" placeholder="Nhập giá sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="">Giá sale</label>
                    <input type="text" class="form-control" id="sale_price" name="sale_price" value="{{$models->sale_price}}" placeholder="Nhập giá sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="">Loại sản phẩm</label>
                    <select name="id_cat" class="form-control">
                      <option value="0">--Chọn loại sản phẩm--</option>
                      @foreach($Categories as $cat)
                        <option {{ $models->id_cat == $cat->id_cat ? "selected" : "" }} value="{{ $cat->id_cat }}">{{ $cat->name_cat }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Chọn ảnh sản phẩm</label>
                    <div class="input-group">
                      <input type="file" name="file" class="text-center center-block file-upload" value="{{$models->image}}" accept="image/gif, image/jpeg, image/jpg, image/png"/>  
                    </div>
                  </div>
                   <div class="form-group">
                      <label for="">Mô tả</label>
                      <div class="mb-3">
                        <textarea class="textarea" id="descriptions" name="descriptions" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          {{$models->descriptions}}
                        </textarea>
                      </div>
                    </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck2" {{ $models->status == 1 ? "checked" : "" }} name="status">
                    <label class="form-check-label" for="exampleCheck2">Hiện</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Sửa sản phẩm</button>
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