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

        <h1>Transport details</h1> 
        <a class="btn btn-primary"href="add_transport.php">Add</a>
         <br>

       

<table>
<thead>
<tr>
                
                <td>Transport_id</td>
                <td>Type</td>
                <td>Name</td>
                <td>Total seat</td>
                <td>Available seat</td>
                <td>Transport Fare</td>
               
                <td>Action</td>
              
                

</tr>
</thead>
<tbody>
<?php
                $sql = "SELECT * FROM `transport`";
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
            ?>
    <tr>
                <td><?php echo $row['trans_id']; ?></td>
                <td><?php echo $row['trans_type']; ?></td>
                <td><?php echo $row['trans_name']; ?></td>
                <td><?php echo $row['tot_seat']; ?></td>
                <td><?php echo $row['avl_seat']; ?></td>
                <td><?php echo $row['trans_fare']; ?></td>
                <td>
                
                <a class="btn btn-danger"href="deletetrans.php?id=<?php echo $row['trans_id'];?>"onclick="return confirm ('are you sure you want to delete it ?')">Delete</a></td>
    </tr>

   <?php }
  } ?>
</tbody>
        </table>
    </body>
</html>