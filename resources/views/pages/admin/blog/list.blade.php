@extends('layout.admin.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>DataTables</h1> -->
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
            <a href="{{route('add-blog')}}">Thêm blog</a>

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
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên blog</th>
                    <th>Ảnh blog</th>
                    <th>Mô tả</th>
                    <th>Nội dung</th>
                    <th>Ngày tạo</th>
                    <th>#</th>
                  </tr>
                </thead>
                
                <tbody>
                  @foreach($blog as $blg)
                  <tr>
                    <td>{{$blg -> id}}</td>
                    <td>{{$blg -> name}}</td>
                    <td><img src="{{asset('public/Uploads')}}/{{$blg -> image}}" alt="" width="100px"></td>
                    <td>{{$blg -> des}}</td>
                    <td>{{$blg -> content}}</td>
                    <td>{{$blg -> created_at}}</td>
                    <td>
                      <a href="{{ Route('edit-blog',$blg) }}" class="btn btn-primary btn-xs">Sửa</a>
                      <a href="{{ Route('deletePro',$blg) }}" class="btn btn-danger btn-xs" onclick="return confirm('Xác nhận xoá ?')">Xóa</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>                
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




@stop()


