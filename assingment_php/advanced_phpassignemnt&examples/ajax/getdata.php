<?php
$con=new mysqli("localhost","root","","mercy_care");

if(isset($_POST["cn"]))

{
  
    $cn=$_POST["cn"];

    $sel="select * from state where cid='$cn'";
    $query=mysqli_query($con,$sel);
    while($result=mysqli_fetch_array($query))

    {

        ?>

        <option value="<?php echo $result["sid"];?>"><?php echo $result["sname"];?></option>

<?php
    }


}

?>



<?php

if(isset($_POST["st"]))

{
  
    $st=$_POST["st"];

    $sel="select * from city where sid='$st'";
    $query=mysqli_query($con,$sel);
    while($result=mysqli_fetch_array($query))

    {

        ?>

        <option value="<?php echo $result["ctid"];?>"><?php echo $result["ctname"];?></option>

<?php
    }


}




?>