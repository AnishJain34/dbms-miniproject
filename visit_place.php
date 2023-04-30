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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Media CSS-->
    <link rel="stylesheet" href="assets/css/media.css">



    <style>
        .button {
            background-color: #;
            border: black;
            color: white;
            padding: 15px 32px;
            /*text-align: right;*/
            text-decoration: underline;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button_div {
            text-align: center;
        }

    </style>

    

    <style>
        .button {
            background-color: #555555;
            border: black;
            color: white;
            padding: 15px 32px;
            /*text-align: right;*/
            text-decoration: underline;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button_div {
            text-align: center;
        }

    </style>

    

    <style>
         body
        {
            background-image:url(Image/rock.jpg);

        }
    
            table {
            background-color:#fff;
            border-collapse: collapse;
            font-family: "Times New Roman",Times,serif;
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
            <th>BOOK NOW!!</th>
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
        <?php $place = $row['place_name']; ?>
            <?php $details = $row['place_details']; ?>
            
            <td><?php echo $place ?></td>
            <td>
                <img src="image/<?php echo $row['place_img']; ?>" height="400" width="500">
            </td>
            <td><?php echo $row['place_details']?></td>
            <td> <a href="booking.php?place=<?php echo $place; ?>">Booking</a> </td>
        </tr>

        <?php
            
        }
        }
        ?>
    </table>
    </div>
    <div class="button_div"><a href="log_out.php" class="button">Log Out</a></div>
    <div class="button_div"><a href="check_book_bill.php" class="button">Check Book and Bill</a></div>

</body>

</html>
