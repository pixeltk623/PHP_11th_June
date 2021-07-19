<?php 
    


   // $_POST['submit'];
    if (isset($_POST['submit'])) {
       $number = $_POST['number'];
       if($number=='') {
            $error =  "Number is Blank";
       } else {
            if ($number%2==0) {
                $result =  "<h1 style='color: green; text-align: center;'>Even number</h1>";
            } else {
                $result =  "<h1 style='color: red; text-align: center;'>Odd number</h1>";
            }
       }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

    <form method="post">
        <label>Enter The Number: </label>
        <input type="text" name="number">

        <?php 
            if (isset($error)) {
                ?>
                <span style="color: red;"><?php echo $error; ?></span>
                <?php
            }
        ?>
        <br><br>
        <input type="submit" name="submit">
    </form>
    <?php 

        if (isset($result)) {
            echo $result;
        }

    ?>
</body>
</html>