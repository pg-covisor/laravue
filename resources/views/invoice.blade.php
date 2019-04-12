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

        <div class="row">
                <div class="col-12">

                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                          <!-- title row -->
                          <div class="row">
                            <div class="col-12">
                              <h4>
                                <i class="fa fa-globe"></i> AdminLTE, Inc.
                                <small class="float-right">Date: 2/10/2018</small>
                              </h4>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- info row -->
                          <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                              From
                              <address>
                                <strong>Admin, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                Phone: (804) 123-5432<br>
                                Email: info@almasaeedstudio.com
                              </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                              To
                              <address>
                                <strong>John Doe</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                Phone: (555) 539-1037<br>
                                Email: john.doe@example.com
                              </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                              <b>Invoice #007612</b><br>
                              <br>
                              <b>Order ID:</b> 4F3S8J<br>
                              <b>Payment Due:</b> 2/22/2014<br>
                              <b>Account:</b> 968-34567
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->

                          <!-- Table row -->
                          <div class="row">
                            <div class="col-12 table-responsive">
                              <table class="table table-striped">
                                <thead>
                                <tr>
                                  <th>Qty</th>
                                  <th>Product</th>
                                  <th>Serial #</th>
                                  <th>Description</th>
                                  <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Call of Duty</td>
                                  <td>455-981-221</td>
                                  <td>El snort testosterone trophy driving gloves handsome</td>
                                  <td>$64.50</td>
                                </tr>
                                <tr>
                                  <td>1</td>
                                  <td>Need for Speed IV</td>
                                  <td>247-925-726</td>
                                  <td>Wes Anderson umami biodiesel</td>
                                  <td>$50.00</td>
                                </tr>
                                <tr>
                                  <td>1</td>
                                  <td>Monsters DVD</td>
                                  <td>735-845-642</td>
                                  <td>Terry Richardson helvetica tousled street art master</td>
                                  <td>$10.70</td>
                                </tr>
                                <tr>
                                  <td>1</td>
                                  <td>Grown Ups Blue Ray</td>
                                  <td>422-568-642</td>
                                  <td>Tousled lomo letterpress</td>
                                  <td>$25.99</td>
                                </tr>
                                </tbody>
                              </table>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->

                          <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">
                              <p class="lead">Payment Methods:</p>
                              <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/visa.png" alt="Visa">
                              <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/mastercard.png" alt="Mastercard">
                              <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/american-express.png" alt="American Express">
                              <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/paypal2.png" alt="Paypal">

                              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                                plugg
                                dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                              </p>
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                              <p class="lead">Amount Due 2/22/2014</p>

                              <div class="table-responsive">
                                <table class="table">
                                  <tbody><tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>$250.30</td>
                                  </tr>
                                  <tr>
                                    <th>Tax (9.3%)</th>
                                    <td>$10.34</td>
                                  </tr>
                                  <tr>
                                    <th>Shipping:</th>
                                    <td>$5.80</td>
                                  </tr>
                                  <tr>
                                    <th>Total:</th>
                                    <td>$265.24</td>
                                  </tr>
                                </tbody></table>
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->

                          <!-- this row will not appear when printing -->
                          <div class="row no-print">
                            <div class="col-12">

                              <a href="" @click.prevent="printme" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                              <button type="button" class="btn btn-success float-right">
                                  <i class="fa fa-credit-card"></i>
                                  Submit Payment
                              </button>

                              <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                <i class="fa fa-download"></i> Generate PDF
                              </button>

                            </div>
                          </div>

                        </div>
                        <!-- /.invoice -->
                      </div>


        </div>
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