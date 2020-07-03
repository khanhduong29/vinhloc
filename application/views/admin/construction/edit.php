
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa công trình</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sửa công trình</li>
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
              <form action="<?php echo base_url(); ?>admin/construction/edit/<?php echo $constructions['id']; ?>" method="post" role="form" enctype="multipart/form-data">
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
                    <label for="">Mã công trình</label>
                    <input type="text" class="form-control" id="name_pro" name="code" placeholder="Nhập tên công trình" value="<?php echo $constructions['code']; ?>">
                    <div class="help-block"></div>
                  </div>
                  <div class="form-group">
                    <label for="">Tên công trình</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên công trình"value="<?php echo $constructions['name']; ?>">
                    <div class="help-block"></div>
                  </div>
                  <div class="form-group">
                    <label for="">Giá</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Nhập giá công trình"value="<?php echo $constructions['price']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="">Loại công trình</label>
                    <select name="id_cat" class="form-control">
                      <option value="0">--Chọn loại công trình--</option>
                      <?php foreach($category as $cat){ ?>
                      <option value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Chọn ảnh công trình</label>
                    <div class="input-group">
                      <input type="file" name="file" class="text-center center-block file-upload" accept="image/gif, image/jpeg, image/jpg, image/png"/>  
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status" <?php echo $constructions['status'] ? 'checked' : '' ?>>
                    <label class="form-check-label" for="exampleCheck1">Hiện</label>
                  </div> 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Sửa công trình</button>
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