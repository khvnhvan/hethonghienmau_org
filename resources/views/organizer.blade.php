<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THÔNG TIN TỔ CHỨC</title>
    <link rel="icon" href="{{url('public/organizersite')}}/img/bdsm_logo.ico">
    <link rel="stylesheet" href="{{url('public/organizersite')}}/style.css">
</head>
<body>
    <ul class="vertical-navbar">
        <li><img src="{{url('public/organizersite')}}/img/bdsm_logo.png" alt="" class="bdsm_logo"></li>
        <li><a href="#">DASHBOARD</a></li>
        <li><a href="#">THÔNG TIN TỔ CHỨC</a></li>
        <li><a href="#">THÔNG TIN NGƯỜI HIẾN MÁU</a></li>
        <li><a href="#">THÔNG TIN NGƯỜI HIẾN MÁU TRONG NGÀY</a></li>
        <li><a href="#">CHỨNG NHẬN</a></li>
        <li><a href="#">TẠO LỊCH</a></li>
        <li><a href="#">CHỈNH LỊCH</a></li>
        <li><a href="#">ĐĂNG XUẤT</a></li>
    </ul>

    <div class="dashboard">
        @yield('orgmain')
    </div>

</body>
</html>
