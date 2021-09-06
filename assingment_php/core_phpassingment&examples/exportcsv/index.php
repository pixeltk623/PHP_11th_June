<?php 
include("config.php");
?>
<!doctype html>
<html>
    <head>
        <title>data in csv</title>
        <link href="style.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            
            <form method='post' action='download.php'>
            
            <input type='submit' value='Export' name='Export'>
                
            <table border='1' style='border-collapse:collapse;'>
                <tr>
                    <th>Custid</th>
                    <th>Photo</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Hobby</th>
                    <th>Gender</th>
                    <th>Pincode</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>City</th>

                </tr>
            <?php 
            $query = "SELECT customer.*,sname,ctname from customer join state on customer.sid=state.sid join city on customer.ctid=city.ctid ORDER BY custid asc";
            $result = mysqli_query($con,$query);
            $user_arr = array();
            while($row = mysqli_fetch_array($result)){
                $custid = $row['custid'];
                $photo = $row['photo'];
                $fname = $row['firstname'];
                $lname = $row['lastname'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                $h = $row['hobby'];
                $g = $row['gender'];
                $pin = $row['pincode'];
                $add = $row['address'];
                $sn = $row['sname'];
                $ct = $row['ctname'];
                $user_arr[] = array($custid,$photo,$fname,$lname,$email,$mobile,$h,$g,$pin,$add,$sn,$ct);
            ?>
                <tr>
                    <td><?php echo $custid; ?></td>
                    <td><?php echo $photo; ?></td>
                    <td><?php echo $fname; ?></td>
                    <td><?php echo $lname; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $mobile; ?></td>
                    <td><?php echo $h; ?></td>
                    <td><?php echo $g; ?></td>
                    <td><?php echo $pin; ?></td>
                    <td><?php echo $add; ?></td>
                    <td><?php echo $sn; ?></td>
                    <td><?php echo $ct; ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <?php 
            $serialize_user_arr = serialize($user_arr);
            ?>
            <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
            </form>
        </div>
    </body>
</html>

