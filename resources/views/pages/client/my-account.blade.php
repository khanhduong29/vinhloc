@extends('layout.client.index')
@section('content')
	<main>
		<section class="main_content_area">
            <div class="container">
                <div class="account_dashboard">
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <!-- Nav tabs -->
                            <div class="dashboard_tab_button">
                                <ul role="tablist" class="nav flex-column dashboard-list">
                                    <li class="__web-inspector-hide-shortcut__"> <a href="#orders" data-toggle="tab" class="nav-link active show">Lịch sử đơn hàng</a></li>
                                    <li><a href="#address" data-toggle="tab" class="nav-link">Địa chỉ</a></li>
                                    <li><a href="#account-details" data-toggle="tab" class="nav-link">Chi tiết tài khoản</a></li>
                                    <li><a href="{{route('log-out')}}" class="nav-link">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                            <!-- Tab panes -->
                            <div class="tab-content dashboard_content">
                                <div class="tab-pane fade active show" id="orders">
                                    <h3>Lịch sử đơn hàng</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Ngày</th>
                                                    <th>Trạng thái</th>
                                                    <th>Tổng</th>
                                                    <th>#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($orders as $k => $ord)
                                                <tr>
                                                    <td>{{$k+1}}</td>
                                                    <td>{{$ord -> created_at}}</td>
                                                    <td>
														@if($ord -> status == 0)
									                    <span class="success">Chờ xác nhận</span>
									                    @elseif($ord -> status == 1)
									                    <span class="success">Đã xác nhận</span>
									                    @elseif($ord -> status == 2)
									                    <span class="success">Giao hàng thành công</span>
									                    @endif
                                                    </td>
                                                    <td>{{number_format($ord->total_amount)}} VNĐ cho {{$ord -> total_quantity}} sản phẩm </td>
                                                    <td><a href="{{route('detail-order',['id'=>$ord->id])}}" class="view">Chi tiết đơn hàng</a></td>
                                                </tr>
            									@endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="address">
                                   <p>Các địa chỉ sau sẽ được sử dụng trên trang thanh toán theo mặc định.</p>
                                    <h4 class="billing-address">Địa chỉ thanh toán</h4>
                                    <a href="#" class="view">Edit</a>
                                    <address>
                                       Hoang Quoc Viet - Cau Giay - Ha Noi
                                    </address>
                                </div>
                                <div class="tab-pane fade" id="account-details">
                                    <h3>Chi tiết tài khoản</h3>
                                    <div class="login">
                                        <div class="login_form_container">
                                            <div class="account_login_form">
                                                <form action="#">
                                                    <label>Tên</label>
                                                    <input type="text" name="name">
                                                    <label>Email</label>
                                                    <input type="email" name="email">
                                                    <label>Mật khẩu cũ</label>
                                                    <input type="text" name="pasword-old">
                                                    <label>Mật khẩu mới</label>
                                                    <input type="password" name="password">
                                                    <label>Xác nhận mật khẩu mới</label>
                                                    <input type="password" name="confirm_password">
                                                    <div class="save_button primary_btn default_button">
                                                       <button type="submit">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop()

