<!DOCTYPE html>
<?php
    include('connection.php');
?>
<head>
<title>Document</title>
<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<html>
    <body>
    <link rel="stylesheet" href="table.css">


    <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

        <h1>Booking details</h1>
         <br>

       

<table>
<thead>
<tr>
                
                <td>Customer_id</td>
                <td>Place</td>
                <td>Hotel</td>
                <td>transport seat</td>
                <td>Room</td>
                <td>travel by</td>
                <td>Date</td>
                <td>Action</td>
                

</tr>
</thead>
<tbody>
<?php
                $sql = "SELECT * FROM `booking`";
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
            ?>
    <tr>
                <td><?php echo $row['cust_id']; ?></td>
                <td><?php echo $row['place_name']; ?></td>
                <td><?php echo $row['hotel_name']; ?></td>
                <td><?php echo $row['need_trans_seat']; ?></td>
                <td><?php echo $row['need_room']; ?></td>
                <td><?php echo $row['trans_name']; ?></td>
                <td><?php echo $row['Cust_date']; ?></td>
                <td>
                
                <a class="btn btn-danger"href="deletebooking.php?id=<?php echo $row['cust_id'];?>"onclick="return confirm ('are you sure you want to delete it ?')">Delete</a></td>
    </tr>

   <?php }
  } ?>
</tbody>
        </table>
    </body>
</html>