<?php

    
include_once("connection.php");

    
    
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
                <h1>ADD customer</h1>
             
                
                <input type="hidden" id="login" class="fadeIn second" name="cust_id" value="">
                <div class="textbox">
                <input type="text" id="login" class="fadeIn second" name="cust_name" placeholder="Name" value="">
                </div>
                <div class="textbox">
                <input type="text" id="login" class="fadeIn second" name="cust_address" placeholder="Address"value="">
                </div>
                <div class="textbox">
                <input type="text" id="login" class="fadeIn second" name="cust_phone" placeholder="Phone" value="">
                </div>
                <div class="textbox">
                <input type="email" id="login" class="fadeIn second" name="cust_mail" placeholder="Email"value="">
                </div>
                <input class="btn btn-primary" name="add" type='submit' value='add' onclick="return confirm ('Are you sure you want add ?')">
                
</div>
            </div>
        </div>

</form>
<?php    
        if(isset($_POST['add']))
        {
            $customer_name = $_POST['cust_name'];
           
            $customer_address = $_POST['cust_address'];
            $customer_phone = $_POST['cust_phone'];
            $customer_mail = $_POST['cust_mail'];
            
            $sql_1 = "SELECT * FROM customer WHERE cust_mail = '$customer_mail'";
            $result = $conn->query($sql_1);
            
            if($result->num_rows==0)
            {
             
                 $sql = "INSERT INTO customer(cust_name,cust_address,cust_mail,cust_phone) VALUES ('$customer_name','$customer_password','$customer_address','$customer_mail','$customer_phone')";
            
                if ($conn->query($sql) == TRUE) {
                  echo "New record created successfully<br>";       
                   }
                
               header("Location: show_customer.php") ;
    
               }
             else
             {
                echo "This mail is already taken<br>";
             }
         }
    
    
        ?>
       
    </body>
    </html>