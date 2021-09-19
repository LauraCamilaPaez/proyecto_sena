<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Buttons | Gull Admin Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          referrerpolicy="no-referrer"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>

<body class="text-left">
<div class="app-admin-wrap layout-sidebar-large">
@include('layouts.components.navbar')
@include('layouts.components.sidebar')
<!-- =============== Left side End ================-->
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <!-- ============ Body content start ============= -->
        <div class="main-content">
            <div class="breadcrumb">
                <h1>Buttons</h1>
                <ul>
                    <li><a href="">UI Kit</a></li>
                    <li>Buttons</li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>
            <div class="row">
                @yield('content')
            </div><!-- end of main-content -->
        </div><!-- Footer Start -->
        <div class="flex-grow-1"></div>
        @include('layouts.components.footer')
    </div>
</div>
<script src="{{ url('js/app.js') }}"></script>
</body>

</html>
