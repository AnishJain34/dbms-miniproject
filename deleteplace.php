<?php

    include('connection.php');
    
if(isset($_GET['id'])){
    $place_id=$_GET['id'];
    $sql="DELETE from place where place_id=$place_id";
    $result=$conn->query($sql);
    if($result==TRUE)
    {
        $_SESSION['message'] = " Customer $customer_id deleted!"; 

       
       
        header("location:place_detail.php");
    }
    else{
    echo"Error:" . $sql ."<br>" . $conn->error;
    }

}


?>