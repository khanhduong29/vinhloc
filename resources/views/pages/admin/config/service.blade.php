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
              <h3 class="card-title">Nội dung trang dịch vụ</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              @foreach($config as $con)
                @if($con->name == 'service')
                  {!!$con->value!!}
                  <a href="{{ Route('edit-config',$con) }}" class="btn float-right btn-primary btn-xs mt-5">Sửa</a>
                @endif
              @endforeach
              <!-- <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên </th>
                    <th>Giá trị</th>
                    <th>Ngày thêm</th>
                    <th>#</th>
                  </tr>
                </thead>

                  <tbody>
                    @foreach($config as $con)
                    @if($con->name != 'about' && $con->name != 'service')
                    <tr>
                      <td>{{$con -> id}}</td>
                      <td>{{$con -> name}}</td>
                      <td>{{$con -> value}}</td>
                      <td>{{$con->updated_at}}</td>
                      <td>
                        <a href="{{ Route('edit-config',$con) }}" class="btn btn-primary btn-xs">Sửa</a>
                      </td>
                    </tr>
                    @endif
                    @endforeach
                  </tbody>
              </table> -->
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



