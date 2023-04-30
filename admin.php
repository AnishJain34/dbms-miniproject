<!DOCTYPE html>
<html>
<?php
    include('connection.php');
     ?>


<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body class="adlog">
    <form action="admin.php" method="post">

    <link rel="stylesheet" type="text/css" href="css/signup.css">
            
                <div class="wrapper fadeInDown pad">
                    <div id="">

                    <div class="login-box">
            <h1>Admin Access</h1>
               
                    


                    <div class="text-box">
                    
                    <input type="admin" id="login" class="fadeIn second" placeholder="Admin Name" name="admin_name"required>
</div>
<div class="text-box"><br>
                    
                    <input type="password" id="password" placeholder="Adminpassword" name="admin_password"  required><br>
                  <br>  <input type="submit" class="fadeIn fourth" name="submit" value="Log In"> 
                

</div>
            </div>
                    </div>
                </div>
           


    </form>




   <?php
        if(isset($_POST['submit']))
        {
            if($_POST['admin_name']=="admin"&&$_POST['admin_password']=="1234")
            {
               header("Location: admin_show.php");
            }
        }

         ?>     


</body>

</html>
