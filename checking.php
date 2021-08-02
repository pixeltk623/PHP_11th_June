<?php
if(isset($_POST['submit'])){
    if($_POST['number'] == ''){
        echo "<span style=color:red>"."Please Enter Atleast One  Number"."</span>";
    }
    else if($_POST['number'] >0){
    
        $number = $_POST['number'];

        if($number>0) {

            if($number==1) {
                echo "Number is Not Prime";
            } else {
               for($number=1; $number<=100;$number++ )

                $count = 0;
                for($i = 1; $i<=$number; $i++) {

                    if($number%$i== 0) {  // 4 // 4%1 // 
                        $count++; // 1 // 2 // 3
        if($_POST['number'] == 1){
            echo "<span style=color:red>"."1 Is Not Prime Number"."</span>"."<br>";
        }
        else {
            for($i=2;$i<=$_POST['number'];$i++){
                $count=0;
                for($j=2;$j<=$i/2;$j++){
                    if($i%$j==0){
                        $count++;
                        break;
                    }
                }
                if($count == 0){
                    echo "<span style=color:green>".$i." Is Prime Number"."</span>"."<br>";
                }
            
            }
        }
        
    }
    else{
        echo "<span style=color:red>"." Do Not Enter Alphabet"."</span>";
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
        <span style="color:red">
            <?php 
               if (isset($prime)) {
                   echo $prime;
               }
               ?>
        </span>
    </form>
</body>
</html>

