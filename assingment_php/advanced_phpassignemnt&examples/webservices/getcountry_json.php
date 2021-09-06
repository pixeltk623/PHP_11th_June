<?php
#http://country.io/names.json

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

  <center>
    <h2>Get Country from URL using json webservices</h2>
     <form method="POST">
        select Country :<select name="country">
            <option value="">-select country-</option>

            <?php
            
            $url="http://country.io/names.json";
            $file=file_get_contents($url);
            $cn=json_decode($file, true);
            
            asort($cn);
            
            foreach($cn as $cn1)

            {
            
               

            ?>
             <option value="<?php echo $cn1;?>"><?php echo $cn1;?></option>
             


             <?php
            }
             ?>
        </select>
<br><br>




select Satate :<select name="state">
            <option value="">-select state-</option>

            <?php
            
            $url1="state.json";
            $file1=file_get_contents($url1);
            $sn=json_decode($file1, true);
            
            asort($sn);
            
            foreach($sn as $sn1)

            {
            
               

            ?>
             <option value="<?php echo $sn1;?>"><?php echo $sn1;?></option>
             


             <?php
            }
             ?>
        </select>





     </form>


    </center>

</body>
</html>