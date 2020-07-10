@extends('layouts.admin_main')
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
            <a href="{{route('add-product')}}">Thêm sản phẩm</a>
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
                  <th width="5%">ID</th>
                  <th width="26%">Name product</th>
                  <th width="10%">Category</th>
                  <th width="5%">Price</th>
                  <th width="14%">Sale price</th>
                  <th width="10%">Image</th>
                  <th width="5%">Status</th>
                  <th width="20%">Date</th>
                  <th width="5%">#</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $pro)
                  <tr>
                    <td>{{$pro -> id_pro}}</td>
                    <td>{{$pro -> name_pro}}</td>
                    <td>{{$pro-> getCat -> name_cat}}</td>
                    <td>{{$pro -> price}}</td>
                    <td>{{$pro -> sale_price}}</td>
                    <td><img src="{{ asset('public/Uploads') }}/{{ $pro->image}}" style="width: 100px;" alt=""></td>
                    <td>{{ $pro->status == 1 ? "Hiện" : "Ẩn" }}</td>
                    <td>{{$pro->updated_at}}</td>
                    <td>
                      <a href="{{ Route('edit-product',['id_pro'=>$pro->id_pro]) }}" class="btn btn-primary btn-xs">Sửa</a>
                      <a href="{{Route('deleteProduct',['id_pro'=>$pro->id_pro])}}" class="btn btn-danger btn-xs" onclick="return confirm('Xác nhận xoá ?')">Xóa</a>
                    </td>
                  </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                  <tr>
                      <th>ID</th>
                      <th>Name product</th>
                      <th>Name category</th>
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







@stop()



