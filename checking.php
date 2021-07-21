<?php 
    

    // 1 - 100 

    if (isset($_POST['submit'])) {
        
        $number = $_POST['number'];

        if($number>0) {

            if($number==1) {
                echo "Number is Not Prime";
            } else {

                $count = 0;
                for($i = 1; $i<=$number; $i++) {

                    if($number%$i==0) {  // 4 // 4%1 // 
                        $count++; // 1 // 2 // 3
                    }

                }

                if($count==2) {
                    echo "Number is Prime";
                } else {
                    echo "Number is Not Prime";
                }

            }
        } else {
            echo "Not a Valid Number";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

    <form method="post">
        <label>Enter The Number: </label>
        <input type="text" name="number">
        <input type="submit" name="submit">
    </form>
</body>
</html>