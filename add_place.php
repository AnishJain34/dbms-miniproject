<!DOCTYPE html>
<?php
include('connection.php');
session_start();

$place_id = $_SESSION['id'];

?>
<html>
<h4><center>Add place information</center></h4>
    <head>
        <link rel="stylesheet" href="mystyle.css">
    <body>
        <?php
        if(isset($_POST['uploadfilesub']))
        {
            $place = $_POST['place_name'];
            $filename = $_FILES['uploadfile']['name'];

            $filetmpname =  $_FILES['uploadfile']['tmp_name'];
            $folder = 'image/';
            $details = $_POST['place_details'];
            move_uploaded_file($filetmpname,$folder.$filename);
            $sql = "INSERT INTO place(place_name,place_img,place_details) VALUES ('$place','$filename','$details')";
            if ($conn->query($sql) == TRUE) {
                ?>
                <script type="text/javascript">
      alert("New record created successfully")
    </script>
    <?php
            }
            else{
                

                echo "Already added place";
            }
        }
   
        ?>
        <div class="form-container">

        <form action = "add_place.php" method = "post" enctype="multipart/form-data">
            <p>place_name</p>
            <input type = "text" placeholder = "place name" name = "place_name" />
            <br><br>
            <p>place image</p>
            <input type = "file" name = "uploadfile"><br>
            <p>Details</p>
            <textarea class="inputTextarea" name="Details" rows="4" class="form-control" ng-model='feedback' placeholder="Please write place details" required></textarea>
            <input class="form-btn" type = "submit" name ="uploadfilesub" value = "upload" />
        </form>
    </div>
    </body>
</html>