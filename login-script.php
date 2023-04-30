<?php

require('connection.php');
$db= $conn; // assign  your connection varibale

// by default, error messages are empty
$login=$emailErr=$passErr='';
  
 extract($_POST);
if(isset($_POST['submit']))
{
   
   //input fields are Validated with regular expression
   $validName="/^[a-zA-Z ]*$/";
   $validEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
   
 
//Email Address Validation
if(empty($customer_mail)){
  $emailErr="Email is Required"; 
}
else if (!preg_match($validEmail,$customer_mail)) {
  $emailErr="Invalid Email Address";
}
else{
  $emailErr=true;
}
    
// password validation 
if(empty($customer_password)){
  $passErr="Password is Required"; 
} 
else{
   $passErr=true;
}

// check all fields are valid or not
if( $emailErr==1 && $passErr==1)
{
 
   //legal input values
   $customer_email=     legal_input($customer_mail);
   $customer_password=  legal_input(md5($customer_password));
   
   // call login function
   $login=login($customer_mail,$customer_password);

}

}

// convert illegal input value to ligal value formate
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}

// function to insert user data into database table
function login($customer_mail,$customer_password){

  global $db;

   // checking valid email
  $sql="SELECT cust_mail FROM customer WHERE cust_mail= ?";
  $query = $db->prepare($sql);
  $query->bind_param('s',$customer_mail); 
  $query->execute();
  $exec=$query->get_result();
  if($exec)
  {
  if($exec->num_rows>0){

    // checking email and password
    $loginSql="SELECT cust_mail, cust_password FROM customer WHERE cust_mail=? AND cust_password=?";
    $loginQuery = $db->prepare($loginSql);
    $loginQuery->bind_param('ss',$customer_mail, $customer_password); 
    $loginQuery->execute();
    $execQuery=$loginQuery->get_result();
    if($execQuery)
    {
    if($execQuery->num_rows>0){

      session_start();
      $_SESSION['cust_mail']=$customer_mail;
      
    }else{
      return "Your Password is wrong";
    }

  }else{
  return $db->error;
  }


  }
  else
  {
    return $email." is not registered";
  }
}else{
  return $db->error;
}
    
    
}
?>