
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Danh sách admin</h3>
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
                  <th width="5%">ID</th>
                  <th width="20%">Useradmin</th>
                  <th width="10%">Password</th>
                  <th width="5%">Action</th>
                 <!--  <th width="14%">Sale price</th>
                  <th width="10%">Image</th>
                  <th width="5%">Status</th>
                  <th width="20%">Date</th>
                  <th width="5%">#</th> -->
                </tr>
                </thead>
                <tbody>
                <!-- @foreach($products as $pro) -->
                  <tr>
                    <td>id</td>
                    <td>Useradmin</td>
                    <td>name-cat</td>
                    <!-- <td>price</td>
                    <td>sale-price</td> -->
                    <!-- <td><img src="../../theme/frontend/images/den-nom-2.jpg" style="width: 100px;" alt=""></td> -->
                    <!-- <td>Hiện</td> -->
                   <!--  <td></td> -->
                    <td>
                      <a href="{{ Route('edit-product',['id_pro'=>$pro->id_pro]) }}" class="btn btn-primary btn-xs">Sửa</a>
                      <a href="{{Route('deleteProduct',['id_pro'=>$pro->id_pro])}}" class="btn btn-danger btn-xs" onclick="return confirm('Xác nhận xoá ?')">Xóa</a>
                    </td>
                  </tr>
                <!-- @endforeach -->
                
                </tbody>
                <tfoot>
                 <!--  <tr>
                      <th>ID</th>
                      <th>Name product</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Sale price</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th>#</th>
                    </tr> -->
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


