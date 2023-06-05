<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="{{ asset('plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3d0e11c16d.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Dashboard</li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('userdashboard.index') }}">User dashboard</a></li>
                        <li><a href="{{ route('lessordashboard.index') }}">Lessor dashboard</a></li>
                        <li><a href="{{ route('productdashboard.index') }}">Product dashboard</a></li>
                        <li><a href="{{ route('reviewdashboard.index') }}">Review dashboard</a></li>
                        <li><a href="{{ route('bookingdashboard.index') }}">Booking dashboard</a></li>
                    </ul>
                </li>
                
                    </ul>
                </li>
            </ul>
        </div>
    </div>