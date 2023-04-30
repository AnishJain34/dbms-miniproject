<?php
include_once("connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$customer_id = $_POST['id'];
        $customer_name = $_POST['cust_name'];
        $customer_mail = $_POST['cust_mail'];
        $customer_address = $_POST['cust_address'];
        $customer_phone=$_POST['cust_phone'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE customer SET cust_name='$name',cust_mail='$customer_mail',cust_address='$customer_address',cust_phone='$customer_phone' WHERE cust_id='$customer_id'");

	// Redirect to homepage to display updated user in list
	header("Location: show_customer.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$customer_id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM customer WHERE cust_id=$customer_id");

while($row = mysqli_fetch_array($result))
{
	$customer_name = $row['cust_name'];
    $customer_mail = $row['cust_mail'];
    $customer_address = $row['cust_address'];
    $customer_phone= $row['cust_phone'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>customer_name</td>
				<td><input type="text" name="name" value=<?php echo $customer_name;?>></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $customer_mail;?>></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>