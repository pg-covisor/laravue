<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Call.Fit | Dashboard</title>
        
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/app.css">
        
    </head>

    <body class="hold-transition sidebar-mini skin-blue">
            
        <div id="app" class="wrapper">

            <!-- Header Navbar -->
            @include('layouts.header')

            <!-- Sidebar Container -->
            @include('layouts.sidebar')
           
            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Starter Page</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Starter Page</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                         {{-- <section>
                            @yield('content')
                        </section> --}}
                        <router-view></router-view>
                        <!-- set progressbar -->
                        <vue-progress-bar></vue-progress-bar>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            @include('layouts.footer')
            
        </div>
        <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    <script src="js/app.js"></script>

    </body>
</html>