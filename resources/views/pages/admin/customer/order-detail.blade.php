@extends('layout.admin.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>DataTables</h1>
            <a href="">Home</a> -->
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
              <h3 class="card-title">Chi tiết đơn hàng #{{$orders->id}}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" >
                <div>
                    <p>- Khách hàng: <b> {{$orders->getCus -> name}} </b></p>
                    <p>- Địa chỉ giao hàng: <b> {{$orders->address}}</b></p>
                    <p>- Tổng thanh toán: <b> ${{number_format($orders->total_amount)}}</b></p>
                </div>
                <table id="" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($orders -> detail as $k => $det)
                        <tr>
                            <td>{{$k+1}}</td>
                            <td class="product_thumb">
                                <a href="#">
                                    <img src="{{ asset('public/Uploads') }}/{{$det->getPro->image}}" width="100" alt="ảnh">
                                </a>
                            </td>
                            <td class="product_name">
                                <a href="#">{{$det->getPro->name}}</a>
                            </td>
                            <td class="product-price">
                                £{{number_format($det->price)}}
                            </td>
                            <td class="product_quantity">
                                {{$det->quantity}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="card-footer clearfix">
                  @if($orders->status == 0)
                  <a type="button" class="btn btn-sm btn-primary float-right" href="{{route('confirm-order',['id'=>$orders->id])}}">Xác nhận đơn hàng</a>
                  @elseif($orders->status == 1)
                  <a type="button" class="btn btn-sm btn-primary float-right" href="{{route('complete-order',['id'=>$orders->id])}}">Xác nhận giao hàng</a>
                  @else
                  <button type="button" class="btn btn-sm btn-success float-right" disabled>Đơn hàng đã được giao</button>
                  @endif
                </div>
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
