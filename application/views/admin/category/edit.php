
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa danh mục</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sửa danh mục</li>
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
              <form action="<?php echo base_url(); ?>admin/category/edit/<?php echo $categorys['id']; ?>" method="post" role="form" enctype="multipart/form-data">
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
                    <label for="">Tên danh mục</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục"value="<?php echo $categorys['name']; ?>">
                    <div class="help-block"></div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status" <?php echo $categorys['status'] ? 'checked' : '' ?>>
                    <label class="form-check-label" for="exampleCheck1" >Hiện</label>
                  </div> 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Sửa danh mục</button>
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