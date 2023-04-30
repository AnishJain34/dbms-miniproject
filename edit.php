<?php

    
include_once("connection.php");
$customer_id= $_GET['id'];
$query = "SELECT * from customer where cust_id ='$customer_id'";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
  
    $customer_name = $row['cust_name'];
    $customer_mail = $row['cust_mail'];
    $customer_address = $row['cust_address'];
    $customer_phone= $row['cust_phone'];
}
    
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/signup.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body>
    <body class="user">
    
    
    <form action="update.php" method="post">
        <div class="wrapper fadeInDown pad">
            <div id="formContent">


                <div class="login-box">
                <h1>Update <?php echo $customer_name?>'s form</h1>
             
                
                <input type="hidden" id="login" class="fadeIn second" name="cust_id" value="<?php echo $customer_id?>">
                <div class="textbox">
                <input type="text" id="login" class="fadeIn second" name="cust_name" placeholder="Name" value="<?php echo $customer_name?>">
                </div>
                <div class="textbox">
                <input type="text" id="login" class="fadeIn second" name="cust_address" placeholder="Address"value="<?php echo $customer_address?>">
                </div>
                <div class="textbox">
                <input type="text" id="login" class="fadeIn second" name="cust_phone" placeholder="Phone" value="<?php echo $customer_phone?>">
                </div>
                <div class="textbox">
                <input type="email" id="login" class="fadeIn second" name="cust_mail" placeholder="Email"value="<?php echo $customer_mail?>">
                </div>
                <input class="btn btn-primary" name="update" type='submit' value='update' onclick="return confirm ('Are you sure you want to update ?')">
                
</div>
            </div>
        </div>

</form>
       
    </body>
    </html>