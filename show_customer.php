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

        <h1>User Details</h1>
         <br>

       
         
<table>
<thead>
<tr>
                <td>Customer_name</td>
                <td>Customer_id</td>
                <td>Customer_address</td>
                <td>Customer_mail</td>
                <td>Customer_phone</td>
                <td>Action</td>
                

</tr>
</thead>
<tbody>
<?php
                $sql = "SELECT * FROM customer";
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
            ?>
    <tr>
                <td><?php echo $row['cust_name']; ?></td>
                <td><?php echo $row['cust_id']; ?></td>
                <td><?php echo $row['cust_address']; ?></td>
                <td><?php echo $row['cust_mail']; ?></td>
                <td><?php echo $row['cust_phone']; ?></td>
                <td>
                <a class="btn btn-success"href="edit.php?id=<?php echo $row['cust_id'];?>">Update</a>
                <a class="btn btn-danger"href="delete.php?id=<?php echo $row['cust_id'];?>"onclick="return confirm ('are you sure ?')">Delete</a></td>
    </tr>

   <?php }
  } ?>
</tbody>
        </table>

    </body>
</html>