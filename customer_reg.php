<!DOCTYPE html>
<?php
include('connection.php');
 
if(isset($_POST['submit']))
{
    $customer_name = mysqli_real_escape_string($conn,$_POST['cust_name']);
    $customer_password =mysqli_real_escape_string($conn, $_POST['cust_password'])   ;
    $customer_address = mysqli_real_escape_string($conn,$_POST['cust_address']);
    $customer_phone = mysqli_real_escape_string($conn,$_POST['cust_phone']);
    $customer_mail = mysqli_real_escape_string($conn,$_POST['cust_mail']);

    if(empty($customer_name)){
        $error="name is required";

    }
    
    elseif(empty($customer_address)){
        $error="address is required";
        
    }
    elseif(empty($customer_phone)){
        $error="phone number is required";
        
    }
    elseif(empty($customer_mail)){
        $error="mail is required";
        
    }
    elseif(empty($customer_password)){
        $error="password is required";
        
    }
    elseif(strlen($customer_name)<3 ||strlen($customer_name)>30 ){
        $error="customer name mustbe bw 3 to 30 characters";
    }
    elseif(strlen($customer_password)<6){
        $error="password must be atleast 6 characters";
    }
    elseif(strlen($customer_phone) <10 ){
        $error="Phone number must be 10 numbers";
    }
    elseif(strlen($customer_phone) >10 ){
        $error="Phone number must be 10 numbers";
    }
    else{
    $sql_1 = "SELECT * FROM customer WHERE cust_mail = '$customer_mail'";
    $data=mysqli_query($conn,$sql_1);
    $result=mysqli_fetch_array($data);
    
    if($result >0)
    {
        $error="This mail is already taken<br>";
         

       }
     else
     {
        $sql = "INSERT INTO customer(cust_name,cust_password,cust_address,cust_mail,cust_phone) VALUES ('$customer_name','$customer_password','$customer_address','$customer_mail','$customer_phone')";
    
        $q=mysqli_query($conn,$sql);
        if($q){
            $success="Your account has been successfully";
        }
        
       header("Location: visit_place.php ") ;
     }
    }
 


}
?>
<html>

<head>



    <meta charset="UTF-8">
    <title>login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/new.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</head>

<body class="user">
    <form action="  " method="POST">


    <p style="color : red">
    <?php
    if(isset($error)){
        echo $error;
    }
    ?>
</p>
<p style="color : green">
    <?php
    if(isset($success)){
        echo $success;
    }
    ?>
</p>
        <div class="wrapper fadeInDown pad">
            <div id="formContent">


                <div class="fadeIn first">
                    <h5>User Sign Up</h5>
                </div>

                <input type="text" name="cust_name" placeholder="Name" value="<?php if(isset($error)){ echo $customer_name;}?>">
                <input type="text" name="cust_address" placeholder="Address" value="<?php if(isset($error)){ echo $customer_address;}?>">
                <input type="text" name="cust_phone" placeholder="Phone"  value="<?php if(isset($error)){ echo $customer_phone;}?>">
                <input type="email" name="cust_mail" placeholder="Email" value="<?php if(isset($error)){ echo $customer_mail;}?>">
                <input type="password" id="password" name="cust_password" placeholder="Password">
                <input type="submit"  name="submit" value="Sign Up">

                <p>Already have an Account?<a href="customer_log.php"> Log In</a></p>
            </div>
        </div>





    </form>
   
        
</body>

</html>
