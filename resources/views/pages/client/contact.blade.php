@extends('layout.client.index')

@section('content')
<main>
    <div class="container">
        <section class="big-carousel">
            <img src="{{url('public')}}/frontend/images/slide/slide0.jpg" alt="">
        </section>
    </div>
    <section class="content-contact pb-5 space-title">
        <div class="container">
            <h2 class="text-center">
                <span class="title-big">Liên hệ</span>
            </h2>
            <section class="s-content word-about">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-4">
                        <h3>
                            <span>Thông tin chung</span>
                        </h3>
                        <table cellpadding="5" cellspacing="5" class="fr-tb">
                            <tr>
                                <td>Tên công ty</td>
                                <td>Công ty Cổ Phẩn Đầu Tư Nội Thất Và Dịch Vụ Phú Vinh - Vĩnh Lộc Lighting</td>
                            </tr>
                            <tr>
                                <td>Địa chỉ	</td>
                                <td> 243 Tôn Đức Thắng, Đống Đa,Hà Nội</td>
                            </tr>
                            <tr>
                                <td>Điện thoại	</td>
                                <td> 091 668 1919 - 0243.513.5724</td>
                            </tr>
                            <tr>
                                <td>Website	 </td>
                                <td><a href="index.html">https://vinhlocluxury.com/</a></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><a href="mailto: denvinhloc243@gmail.com?subject=feedback" "email me"> denvinhloc243@gmail.com</a></td>
                            </tr>
                        </table>
                        <h3>
                            <span>ĐỂ LẠI THÔNG TIN ĐƯỢC TƯ VẤN MIỄN PHÍ</span>
                        </h3>
                        <form action="" method="POST" role="form">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 form-group">
                                    <input type="text" class="form-control" id="" placeholder="Họ và tên">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 form-group">
                                    <input type="text" class="form-control" id="" placeholder="Số điện thoại">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="email" class="form-control" id="" placeholder="Email">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg-feb">Gửi thông tin</button>
                        </form>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-4">
                        <div class="map border-1">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.2877351981583!2d105.82896121445454!3d21.02116999341436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9d32150149%3A0xa7a24e81875149e3!2zMjM0IFAuIFTDtG4gxJDhu6ljIFRo4bqvbmcsIEjDoG5nIELhu5l0LCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1591760862520!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </section>
</main>
@endsection
