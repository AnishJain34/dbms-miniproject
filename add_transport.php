<!DOCTYPE html>
<?php
include('connection.php');
?>
<html>

<body>
    <h4>
        <center>Add transport information</center>
    </h4>
    <link rel="stylesheet" href="mystyle.css">
    <div class="form-container">

        <form action="add_transport.php" method="post">

            <label>Transport type:-</label>
            <label class="radio">
                <select name="trans_type">
                    <option value="bus">BUS</option>
                    <option value="train">TRAIN</option>
                    <option value="plane">PLANE</option>
                </select>
            </label>
            <p>Total seat:-</p>
            <input type="number" placeholder="tot_seat" name="tot_seat" /><br>
            <p>Transport name:-</p>
            <input type="text" placeholder="trans_name" name="trans_name" /><br>
            <p>Availabe seat:-</p>
            <input type="number" placeholder="avl_seat" name="avl_seat" /><br>
            <p>Per_seat fare:-</p>
            <input type="number" placeholder="trans_fare" name="trans_fare" /><br>
            <button class="form-btn" type="submit" name="submit">submit</button>
    </div>
    <?php
            if(isset($_POST['submit']))
            {
                $trans_type = $_POST['trans_type'];
                $total_seat = $_POST['tot_seat'];
                $trans_fare = $_POST['trans_fare'];
                $trans_name = $_POST['trans_name'];
                $avl_seat = $_POST['avl_seat'];
                
                $sql_1 = "SELECT * FROM transport WHERE trans_name='$trans_name'";
                $result = $conn->query($sql_1);
                if($result->num_rows==0)
                {
                    $sql = "INSERT INTO transport(trans_type,tot_seat,trans_fare,trans_name,avl_seat) VALUES ('$trans_type','$total_seat','$trans_fare','$trans_name','$avl_seat')";
                    if($conn->query($sql) == true)
                    {
                        echo "new record create successfully<br>";
                    }
                           
                }
                else
                {
                    echo "This name transport exist in database<br>";
                }
                
            }
            ?>
    </form>
</body>

</html>