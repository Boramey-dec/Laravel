<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href={!! asset('css/font-face.css') !!} rel="stylesheet" media="all">
    <link href={!! asset('vendor/font-awesome-4.7/css/font-awesome.min.css') !!} rel="stylesheet" media="all">
    <link href={!! asset('vendor/font-awesome-5/css/fontawesome-all.min.css') !!} rel="stylesheet" media="all">
    <link href={!! asset('vendor/mdi-font/css/material-design-iconic-font.min.css') !!} rel="stylesheet" media="all">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap CSS-->
    <link href={!! asset('vendor/bootstrap-4.1/bootstrap.min.css') !!} rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href={!! asset('vendor/animsition/animsition.min.css') !!} rel="stylesheet" media="all">
    <link href={!! asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') !!} rel="stylesheet" media="all">
    <link href={!! asset('vendor/wow/animate.css') !!} rel="stylesheet" media="all">
    <link href={!! asset('vendor/css-hamburgers/hamburgers.min.css') !!} rel="stylesheet" media="all">
    <link href={!! asset('vendor/slick/slick.css') !!} rel="stylesheet" media="all">
    <link href={!! asset('vendor/select2/select2.min.css') !!} rel="stylesheet" media="all">
    <link href={!! asset('vendor/perfect-scrollbar/perfect-scrollbar.css') !!} rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href={!! asset('css/theme.css') !!} rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" herf="">
    <link rel="stylesheet" href=" {{ asset('mycss/form.css') }} ">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/form.js') }}"></script> --}}



</head>

<body class="animsition">
    <div class="page-wrapper">

        @include('backend.admin.layout.TopMenu')
        @include('backend.admin.layout.LeftMenu')
        {{-- @yield('css') --}}

        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('backend.admin.layout.header')
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                @yield('content')
            </div>

            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>


    </div>

    <!-- Jquery JS-->
    <script src={!! asset('vendor/jquery-3.2.1.min.js') !!}></script>
    <!-- Bootstrap JS-->
    <script src={!! asset('vendor/bootstrap-4.1/popper.min.js') !!}></script>
    <script src={!! asset('vendor/bootstrap-4.1/bootstrap.min.js') !!}></script>
    <!-- Vendor JS       -->
    <script src={!! asset('vendor/slick/slick.min.js') !!}></script>
    <script src={!! asset('vendor/wow/wow.min.js') !!}></script>
    <script src={!! asset('vendor/animsition/animsition.min.js') !!}></script>
    <script src={!! asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') !!}></script>
    <script src={!! asset('vendor/counter-up/jquery.waypoints.min.js') !!}></script>
    <script src={!! asset('vendor/counter-up/jquery.counterup.min.js') !!}></script>
    <script src={!! asset('vendor/circle-progress/circle-progress.min.js') !!}></script>
    <script src={!! asset('vendor/perfect-scrollbar/perfect-scrollbar.js') !!}></script>
    <script src={!! asset('vendor/chartjs/Chart.bundle.min.js') !!}></script>
    <script src={!! asset('vendor/select2/select2.min.js') !!}></script>

    <!-- Main JS-->
    <script src={!! asset('js/main.js') !!}></script>

</body>

</html>
<!-- end document-->
