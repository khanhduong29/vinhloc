<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		<link rel="icon" href="{{url('public')}}/frontend/images/logo1.png">
		<link rel="stylesheet" type="text/css" href="{{url('public')}}/frontend/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{{url('public')}}/frontend/css/animate.css">
		<link rel="stylesheet" type="text/css" href="{{url('public')}}/frontend/css/select2.min.css">
		<link rel="stylesheet" type="text/css" href="{{url('public')}}/frontend/css/slick.css">
		<link rel="stylesheet" type="text/css" href="{{url('public')}}/frontend/css/slick-theme.css">
		<link rel="stylesheet" href="{{url('public')}}/frontend/dist/jquery.fancybox.css">
		<link rel="stylesheet" type="text/css" href="{{url('public')}}/frontend/fonts/fontawesome-free-5.13.0-web/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="{{url('public')}}/frontend/css/style.css">
		<link rel="stylesheet" type="text/css" href="{{url('public')}}/frontend/css/reponsive.css">
	</head>
	<body>
        @include('layout.client.header')

        @yield('content')

        @include('layout.client.footer')
    </body>
    </script>
	<script src="{{url('public')}}/frontend/js/jquery-3.5.1.min.js"></script>
	<script src="{{url('public')}}/frontend/js/bootstrap.min.js"></script>
	<script src="{{url('public')}}/frontend/js/slick.js"></script>
	<script src="{{url('public')}}/frontend/dist/jquery.fancybox.js"></script>
	<script src="{{url('public')}}/frontend/js/select2.min.js"></script>
	<script src="{{url('public')}}/frontend/js/wow.min.js"></script>
	<script src="{{url('public')}}/frontend/js/plugin.js"></script>
	<script>
        $('#giasp').on('change',function() {
            let values = [];
            values[0] = $('option:selected',this).data('giatri1');
            values[1] = $('option:selected',this).data('giatri2');
            $.ajax({
                type: "GET",
                url: "{{route('getprice')}}",
                data: {
                    price: values
                },
                success: function (res) {
                    $('#content').html(res);
                }
            });
        });
        $('#cate').on('change',function() {
            $cateid = $('option:selected',this).val();
            $.ajax({
                type: "GET",
                url: "{{route('getcategory')}}",
                data: {
                    id: $cateid
                },
                success: function (res) {
                    $('#content').html(res);
                }
            });
        });
        $('#orderby').on('change',function() {
            $orderby = $('option:selected',this).val();
            if ($orderby != '') {
                $.ajax({
                type: "GET",
                url: "{{route('orderby')}}",
                data: {
                    data: $orderby
                },
                success: function (res) {
                    $('#content').html(res);
                }
            });
            } else {
                $('#content').html('');
            }
            
        }); 
    </script>

      <script>
      	new WOW().init();
      </script>

</html>
