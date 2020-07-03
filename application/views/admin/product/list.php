
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><a href="add">Thêm sản phẩm</a></h3>
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
                <?php foreach($products as $pro){ ?>
                
                  <tr>
                    <td><?php echo $pro['id'] ?></td>
                    <td><?php echo $pro['code'] ?></td>
                    <td><?php echo $pro['name'] ?></td>
                    <td><?php echo $pro['id_cat'] ?></td>
                    <td><?php echo $pro['price'] ?></td>
                    <td>
                      
                      <img src="<?php echo base_url(); ?>Uploads/<?php echo $pro['image'] ?>" style="width: 100px;" alt=""></td>
                    <td><?php echo $pro['status'] ? 'Hiện' : 'Ẩn' ?></td>
                    <td><?php echo $pro['created_at'] ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>admin/product/edit/<?php echo $pro['id']; ?>" class="btn btn-primary btn-xs">Sửa</a>
                      <a href="<?php echo base_url(); ?>admin/product/delete/<?php echo $pro['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Xác nhận xoá ?')">Xóa</a>
                    </td>
                  </tr>
                <?php } ?>
                
                </tbody>
                <tfoot>
                  <tr>
                      <th>ID</th>
                      <th>Name product</th>
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


