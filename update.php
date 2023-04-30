<?php
include("connection.php");

    if(isset($_POST['update']))
    {
        $customer_id = $_POST['cust_id'];
        $customer_name = $_POST['cust_name'];
        $customer_mail = $_POST['cust_mail'];
        $customer_address = $_POST['cust_address'];
        $customer_phone=$_POST['cust_phone'];

        $query = "UPDATE `customer` set `cust_name` = '$customer_name', `cust_mail`='$customer_mail',`cust_address`='$customer_address',`cust_phone`='$customer_phone' where `cust_id`='$customer_id'";
        $result = mysqli_query($conn,$query);
        if($result== TRUE)
        {
            header("location:show_customer.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:show_customer.php");
    }
    ?>