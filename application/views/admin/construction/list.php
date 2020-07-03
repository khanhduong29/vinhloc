
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><a href="add">Thêm công trình</a></h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Date</th>
                  <th>#</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($constructions as $con){ ?>
                
                  <tr>
                    <td><?php echo $con['id'] ?></td>
                    <td><?php echo $con['code'] ?></td>
                    <td><?php echo $con['name'] ?></td>
                    <td><?php echo $con['id_cat'] ?></td>
                    <td><?php echo $con['price'] ?></td>
                    <td>
                      
                      <img src="<?php echo base_url(); ?>Uploads/<?php echo $con['image'] ?>" style="width: 100px;" alt=""></td>
                    <td><?php echo $con['status'] ? 'Hiện' : 'Ẩn' ?></td>
                    <td><?php echo $con['created_at'] ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>admin/construction/edit/<?php echo $con['id']; ?>" class="btn btn-primary btn-xs">Sửa</a>
                      <a href="<?php echo base_url(); ?>admin/construction/delete/<?php echo $con['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Xác nhận xoá ?')">Xóa</a>
                    </td>
                  </tr>
                <?php } ?>
                
                </tbody>
                <tfoot>
                  <tr>
                      <th>ID</th>
                      <th>Name construction</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Sale price</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th>#</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->


