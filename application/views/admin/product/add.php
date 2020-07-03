
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm sản phẩm</h1>
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
               <!-- form start -->
              <form action="<?php echo base_url(); ?>/admin/product/add" method="post" role="form" enctype="multipart/form-data">
                <?php
                echo "<div class='mess_error'>";
                echo "<ul>";
                    if(validation_errors() != ''){
                        echo "<li>".validation_errors()."</li>";
                    }
                echo "</ul>";
                echo "</div>";
                ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Mã sản phẩm</label>
                    <input type="text" class="form-control" id="name_pro" name="code" placeholder="Nhập tên sản phẩm">
                    <div class="help-block"></div>
                  </div>
                  <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm">
                    <div class="help-block"></div>
                  </div>
                  <div class="form-group">
                    <label for="">Giá</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Nhập giá sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="">Loại sản phẩm</label>
                    <select name="id_cat" class="form-control">
                      <option value="0">--Chọn loại sản phẩm--</option>
                      <?php foreach($category as $cat){ ?>
                      <option value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Chọn ảnh sản phẩm</label>
                    <div class="input-group">
                      <input type="file" name="file" class="text-center center-block file-upload" accept="image/gif, image/jpeg, image/jpg, image/png"/>  
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status">
                    <label class="form-check-label" for="exampleCheck1">Hiện</label>
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



