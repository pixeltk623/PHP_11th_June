<?php
if(isset($_POST["dwn"]))

{

    $file="naturals.jpg";
    
    if(file_exists($file))
    {

    header('Content-Description:File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires:0');
    header('Cache-Control:must-revalidate');
    header('Pragma: public');
    header('Content-Length: '.filesize($file));
    readfile($file);

}

}


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
 
        <form method="POST">
         
            <input type="submit" name="dwn" value="Download your image">


        </form>



    </center>
    
</body>
</html>