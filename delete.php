
<?php

    include('connection.php');
    
if(isset($_GET['id'])){
    $customer_id=$_GET['id'];
    $sql="DELETE from customer where cust_id=$customer_id";
    $result=$conn->query($sql);
    if($result==TRUE)
    {
        $_SESSION['message'] = " Customer $customer_id deleted!"; 

       
       
        header("location:show_customer.php");
    }
    else{
    echo"Error:" . $sql ."<br>" . $conn->error;
    }

}


?>