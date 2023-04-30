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

        <h1>Hotel details</h1> 
        <a class="btn btn-primary"href="add_hotel.php">Add</a>
         <br>

       

<table>
<thead>
<tr>
                
                <td>Hotel_id</td>
                <td>Place_name</td>
                <td>Hotel</td>
                
                <td>Total room</td>
                <td>Available room</td>
                <td>price room</td>
                <td>Action</td>
              
                

</tr>
</thead>
<tbody>
<?php
                $sql = "SELECT * FROM `hotel`";
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
            ?>
    <tr>
                <td><?php echo $row['hotel_id']; ?></td>
                <td><?php echo $row['place_name']; ?></td>
                <td><?php echo $row['hotel_name']; ?></td>
                <td><?php echo $row['tot_room']; ?></td>
                <td><?php echo $row['avl_room']; ?></td>
                <td><?php echo $row['room_cost']; ?></td>
                <td>
                
                <a class="btn btn-danger"href="deletehotel.php?id=<?php echo $row['hotel_id'];?>"onclick="return confirm ('are you sure you want to delete it ?')">Delete</a></td>
    </tr>

   <?php }
  } ?>
</tbody>
        </table>
    </body>
</html>