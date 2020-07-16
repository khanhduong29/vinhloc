@extends('layout.admin.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('message') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>DataTables</h1> -->
            <section class="content-header">
             <?php $url = url('').'/'.Request::segment(1).'/'?>
             <h4>
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
            </h4>
          </section>
            <a href="{{route('add-config')}}">Thêm config</a>
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
              <h3 class="card-title">Danh sách config</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên </th>
                    <th>Ảnh</th>
                    <th>Link</th>
                    <th>Vị trí</th>
                    <th>Trạng thái</th>
                    <th>Ngày thêm</th>
                    <th>#</th>
                  </tr>
                </thead>

                  <tbody>
                    @foreach($config as $ban)
                    <tr>
                      <td>{{$ban -> id}}</td>
                      <td>{{$ban -> name}}</td>
                      <td><img src="{{ asset('public/Uploads/config') }}/{{ $ban->image}}" style="width: 100px;" alt=""></td>
                      <td>{{$ban -> link}}</td>
                      <td>
                        @if($ban -> location == 1)
                          Trang chủ
                        @elseif($ban -> location == 2)
                          Giới thiệu
                        @elseif($ban -> location == 3)
                          Dịch vụ
                        @elseif($ban -> location == 4)
                          Liên hệ
                        @endif
                      </td>
                      <td>{{ $ban->status == 1 ? "Hiện" : "Ẩn" }}</td>
                      <td>{{$ban->updated_at}}</td>
                      <td>
                        <a href="{{ Route('edit-config',$ban) }}" class="btn btn-primary btn-xs">Sửa</a>
                        <a href="{{Route('delete-config',$ban)}}" class="btn btn-danger btn-xs" onclick="return confirm('Xác nhận xoá ?')">Xóa</a>
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



