<?php
if(isset($_POST['submit'])){
    $photo =  $_FILES['photo'];
    
 
    echo "Hello";
 
    print_r($photo);
  
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
        <input type="file" value="" name="photo"  >
            <input type="submit" name="submit">        
        </form>
    </body>
    </html>