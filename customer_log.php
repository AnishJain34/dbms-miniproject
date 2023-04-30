<!DOCTYPE html>
<?php
include('connection.php');
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/signup.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body class="user">
    <form action="customer_log.php" method="post">

        <div class="wrapper fadeInDown pad">
            <div id="">

            <div class="login-box">
            <h1>User Log In</h1>
               
                    


                    <div class="text-box">
                    
                    <input type="email" id="login" class="fadeIn second" placeholder="Customer Mail" name="cust_mail"required>
</div>
<div class="text-box"><br>
                    
                    <input type="password" id="password" placeholder="Customer password" name="cust_password"  required><br>
                  <br>  <input type="submit" class="fadeIn fourth" name="submit" value="Log In"><a href="custom_reg.php"> Don't have an account ? </a> 
                

</div>
            </div>
        </div>

    </form>
    <?php
        if(isset($_POST['submit']))
        {   
            $customer_password = $_POST['cust_password'];
            $customer_mail = $_POST['cust_mail'];
            
            $sql = "SELECT * FROM customer WHERE cust_mail = '$customer_mail' AND cust_password ='$customer_password'";
            $result = $conn->query($sql);
            if($result->num_rows!=0)
            {
                $sql_1 = "SELECT cust_id from customer WHERE cust_mail = '$customer_mail' AND cust_password = '$customer_password'";
                
                $result_1 = $conn->query($sql_1);
                
                $row = $result_1->fetch_assoc();
                $_SESSION["id"] = $row['cust_id'];
                header("Location: visit_place.php") ;
            }
            else
            {
                echo " please register emil";
            }
        }
    
        ?>
</body>

</html>
