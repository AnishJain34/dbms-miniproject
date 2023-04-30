<?php
include("connection.php");


?>
 

<!DOCTYPE html>
<html>
<head>
  <title> Sign Up Form </title>
  <meta name="viewport" content="width= device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>

<body>

      

  <form from="myForm" action ="" method="POST">

    <div class="login-box">

      <h1> Sign Up </h1>

      <div class="textbox">
        <input type="text" placeholder="customername" id="fname" name="cust_name" value="" pattern ="^[a-zA-z][ A-Za-z]{4,30}$" title="only letters and white space"  required> 
      </div>

      <div class="textbox">
        <input type="password" placeholder="Password" id="password" name="cust_password" value="" maxlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="password must cantain at least one number and one uppper case and one lowercase letter and 8 characters" required>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Email" id="email" name="cust_mail" value="" required pattern="[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,}$" title="Invalid Email">
      </div>

      <div class="textbox">
        <input type="text" placeholder="Address" id="city" name="cust_address" value="" required>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Phone" id="phone" name="cust_phone" value="" required onkeypress="return /[0-9]/i.test(event.key)" maxlength="10" pattern="([0-9]){10,}">
      </div>

      <input class="btn" type="submit" name="submit" value="submit"> <br> <br>

      <center> <a href="customer_log.php"> Already have an account ? </a> </center>

    </div>
    
  </form>


  <?php    
        if(isset($_POST['submit']))
        {
            $customer_name = $_POST['cust_name'];
            $customer_password = $_POST['cust_password'];
            $customer_address = $_POST['cust_address'];
            $customer_phone = $_POST['cust_phone'];
            $customer_mail = $_POST['cust_mail'];
            
            $sql_1 = "SELECT * FROM customer WHERE cust_mail = '$customer_mail'";
            $result = $conn->query($sql_1);
            
            if($result->num_rows==0)
            {
             
                 $sql = "INSERT INTO customer(cust_name,cust_password,cust_address,cust_mail,cust_phone) VALUES ('$customer_name','$customer_password','$customer_address','$customer_mail','$customer_phone')";
            
                if ($conn->query($sql) == TRUE) {
                  echo "New record created successfully<br>";       
                   }
                
               header("Location: customer_log.php") ;
    
               }
             else
             {
                echo "This mail is already taken<br>";
             }
         }
    
    
        ?>
</body>
</html>
