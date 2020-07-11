<!-- start footer -->
<footer class="footer">
    <div class="container">
        <div class="menu-footer text-center">
            <ul>
                @foreach($categories as $cat)
                <li><a href="{{route('cate-product',['slug'=>$cat->slug])}}">{{$cat -> name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="info-footer mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 items f-contact">
                    <h3>Thông tin liên hệ</h3>
                    <ul>
                        <li>234 Tôn Đức Thắng, Đống Đa, Hà Nội</li>
                        <li>8h30 am - 9h00 pm</li>
                        <li>091 668 1919</li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 items f-service">
                    <h3>Dịch vụ</h3>
                    <ul>
                        <li class="fas"><a href="">Chính sách và bảo hành</a></li>
                        <li class="fas"><a href="">Vận chuyển lắp đặt</a></li>
                        <li class="fas"><a href="">Thanh toán</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 items">
                    <h3>Mạng xã hội</h3>
                    <div class="mxh">
                        <a href="" title=""><i class="fab fa-facebook-f"></i></a>
                        <a href="" title=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 items">
                    <h3>Tư vấn trực tuyến</h3>
                    <form action="" method="POST" role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="Họ và tên">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="Số điện thoại">
                        </div>
                        <button type="submit" class="btn btn-primary form-control btn-lg-feb ">Đăng ký tư vấn</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center p-3">
        BẢN QUYỀN THUỘC VỀ VINHLOCLUXURY.COM @ 2019 | THIẾT KẾ WEBSITE BỞI TECH5S
    </div>
</footer>
<!-- end footer -->
