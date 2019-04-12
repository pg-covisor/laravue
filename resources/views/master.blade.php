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
                <div class="content">
                    <div class="container-fluid">
                        <router-view></router-view>
                        <vue-progress-bar></vue-progress-bar>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            @include('layouts.footer')
            
        </div>
        <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
        @auth    
        <script>
            // It is going to store the current authenticated user in window.user object
            // which we can access later in app.js file to create Gate instance
            window.user = @json(auth()->user());
        </script>
        @endauth
        <script src="js/app.js"></script>
    </body>
</html>