<?php

    include('connection.php');
    
if(isset($_GET['id'])){
    $trans_id=$_GET['id'];
    $sql="DELETE from transport where trans_id=$trans_id";
    $result=$conn->query($sql);
    if($result==TRUE)
    {
        $_SESSION['message'] = " Customer $customer_id deleted!"; 

       
       
        header("location:transport_detail.php");
    }
    else{
    echo"Error:" . $sql ."<br>" . $conn->error;
    }

}


?>