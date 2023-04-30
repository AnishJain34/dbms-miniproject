<!DOCTYPE html>
<html>
<?php
    include('connection.php');
     ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
  
</head>


<body style="margin:50px;">

<style>
body

{
	margin:0;
	padding:0;
	font-family:sans-serif;
	background:url(../Image/eiffel2.jpg) no-repeat;
	height: 100vh;
	background-size: 100% 100%;	
}
</style>
    <div class="container ">
    <h1>Admin Page</h1>
        <div class="row">
        <div class="col-sm-3" style="padding-top:26px; margin-left:450px;">
                <a href="booking_details.php">
                    <button class="btn custom_btn ">Booking Details
                    </button>
                </a>
            </div>
            <div class="col-sm-3" style="padding-top:26px; margin-left:450px;">
                <a href="show_customer.php">
                    <button class="btn custom_btn ">Customer Info
                    </button>
                </a>
            </div>
            <div class="col-sm-3" style="padding-top:26px; margin-left:450px;">
                 <a href="place_detail.php">
                    <button class="btn custom_btn ">Place Details
                    </button>
                </a>
            </div>
            <div class="col-sm-3" style="padding-top:26px; margin-left:450px;">
                 <a href="hotel_detail.php">
                    <button class="btn custom_btn ">Hotel Details
                    </button>
                </a>
            </div>
                <div class="col-sm-3" style="padding-top:26px; margin-left:450px;">
                 <a href="transport_detail.php">
                    <button class="btn custom_btn ">Transport Details
                    </button>
                </a>
            </div>
            
         
              
          

            
        </div>

    </div>

</body>

</html>
