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
                                    <li><a href="#dashboard" data-toggle="tab" class="nav-link active show">Dashboard</a></li>
                                    <li class="__web-inspector-hide-shortcut__"> <a href="#orders" data-toggle="tab" class="nav-link">Đơn hàng</a></li>
                                    <li><a href="#address" data-toggle="tab" class="nav-link">Địa chỉ</a></li>
                                    <li><a href="#account-details" data-toggle="tab" class="nav-link">Chi tiết tài khoản</a></li>
                                    <li><a href="{{route('log-out')}}" class="nav-link">Đăng xuất</a></li>
                                </ul>
                            </div>    
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                            <!-- Tab panes -->
                            <div class="tab-content dashboard_content">
                                <div class="tab-pane fade active show" id="dashboard">
                                    <h3>Dashboard </h3>
                                    <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">Edit your password and account details.</a></p>
                                </div>
                                <div class="tab-pane fade" id="orders">
                                    <h3>Orders</h3>
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
                                   <p>The following addresses will be used on the checkout page by default.</p>
                                    <h4 class="billing-address">Billing address</h4>
                                    <a href="#" class="view">Edit</a>
                                    <p><strong>Bobby Jackson</strong></p>
                                    <address>
                                        House #15<br>
                                        Road #1<br>
                                        Block #C <br>
                                        Banasree <br>
                                        Dhaka <br>
                                        1212
                                    </address>
                                    <p>Bangladesh</p>   
                                </div>
                                <div class="tab-pane fade" id="account-details">
                                    <h3>Account details </h3>
                                    <div class="login">
                                        <div class="login_form_container">
                                            <div class="account_login_form">
                                                <form action="#">
                                                    <p>Already have an account? <a href="register.php">Log in instead!</a></p>
                                                    <div class="input-radio">
                                                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                                    </div> <br>
                                                    <label>First Name</label>
                                                    <input type="text" name="first-name">
                                                    <label>Last Name</label>
                                                    <input type="text" name="last-name">
                                                    <label>Email</label>
                                                    <input type="text" name="email-name">
                                                    <label>Password</label>
                                                    <input type="password" name="user-password">
                                                    <label>Birthdate</label>
                                                    <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
                                                    <span class="example">
                                                      (E.g.: 05/31/1970)
                                                    </span>
                                                    <br>
                                                    <span class="custom_checkbox">
                                                        <input type="checkbox" value="1" name="optin">
                                                        <label>Receive offers from our partners</label>
                                                    </span>
                                                    <br>
                                                    <span class="custom_checkbox">
                                                        <input type="checkbox" value="1" name="newsletter">
                                                        <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                    </span>
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