<?php

    include('connection.php');
    
if(isset($_GET['id'])){
    $hotel_id=$_GET['id'];
    $sql="DELETE from hotel where hotel_id=$hotel_id";
    $result=$conn->query($sql);
    if($result==TRUE)
    {
        $_SESSION['message'] = " Customer $customer_id deleted!"; 

       
       
        header("location:hotel_detail.php");
    }
    else{
    echo"Error:" . $sql ."<br>" . $conn->error;
    }

}


?>