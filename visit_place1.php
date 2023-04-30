<!DOCTYPE html>
<html>
<?php
    include('connection.php');
     ?>

<head>
    <title>Hello, world!</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Media CSS-->
    <link rel="stylesheet" href="assets/new.css">


    <style>
        body
        {
            background-image:url(Image/rock.jpg);

        }
        table {
            background-color:#fff;
            border-collapse: collapse;
            font-family: Arial, Helvetica , sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

    </style>
</head>

<body>
   
   
   <div class="container">
       
   
    <div class="col-sm-12">
        <div class="title">
            <h1 style="color:black;"><b>Place Information</b></h1>
            
        </div>
    </div>

   
   
   
   
   
   
   
   
    <table class="table table-border">
        <tr>
            <th>PlaceName</th>
            <th>Picture</th>
            <th>Details</th>
        </tr>
        <?php
        $sql = "SELECT * FROM place";
        $result = $conn->query($sql);
        //print_r($result);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //print_r($row);
            ?>

        <tr>
        <?php $details = $row['place_details']; ?>
            <td><?php echo $row['place_name']; ?></td>
            <td>
                <img src="image/<?php echo $row['place_img']; ?>" height="200" width="350">
            </td>
            <td><?php echo $row['place_details']?></td>
        </tr>

        <?php
            
        }
        }
        ?>
    </table>
    </div>
</body>

</html>
