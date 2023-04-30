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

        <h1>Place details</h1> 
        <a class="btn btn-primary"href="add_place.php">Add</a>
         <br>

       

<table>
<thead>
<tr>
                
                <td>Place_id</td>
                <td>Place</td>
                <td>place_img</td>
                <td>Place_details</td>
                <td>Action</td>
              
                

</tr>
</thead>
<tbody>
<?php
                $sql = "SELECT * FROM `place`";
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
            ?>
    <tr>
                <td><?php echo $row['place_id']; ?></td>
                <td><?php echo $row['place_name']; ?></td>
                <td><?php echo $row['place_img']; ?></td>
                <td><?php echo $row['place_details']; ?></td>
                <td>
                
                <a class="btn btn-danger"href="deleteplace.php?id=<?php echo $row['place_id'];?>"onclick="return confirm ('are you sure you to want to delete ?')">Delete</a></td>
    </tr>

   <?php }
  } ?>
</tbody>
        </table>
    </body>
</html>