<?php
$con=new mysqli("localhost","root","","mercy_care");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src="js/jquery.js"></script>
    <script type="text/javascript">

         function str(val)

         {
          
            $.ajax({
             type:"POST",
             url:"getdata.php",
             data:"cn="+val,
             success:function(data)

             {

                $("#st").html(data);
             }


            });


         }





         function str1(val)

         {
          
            $.ajax({
             type:"POST",
             url:"getdata.php",
             data:"st="+val,
             success:function(data)

             {

                $("#ct").html(data);
             }


            });


         }




    </script>
</head>
<body>
  <center>
    <h2 align="center">Ajax</h2>

    <form method="POST">

        select Country :<select name="country" id="cn" onchange="return str(this.value)">
          <option value="">-select country-</option>
          <?php
         
          $sel="select * from country";
          $query=mysqli_query($con,$sel);
          while($result=mysqli_fetch_array($query))
          {
              ?>


        
          <option value="<?php echo $result["cid"];?>"><?php echo $result["cname"];?></option>
        
        <?php

          }

          ?>
        </select><br><br>




        
        select State :<select name="state" id="st" onchange="return str1(this.value)">
          <option value="">-select state-</option>
         
          <option value=""></option>
        
        </select><br><br>




        
        select City :<select name="city" id="ct">
          <option value="">-select City-</option>
         
          <option value=""></option>
        
        </select><br><br>


    </form>
     


</body>
</html>