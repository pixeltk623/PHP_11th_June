<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime-Numbers</title>
</head>
<body>
    <form method="post">
        <label >Enter Number :</label>
        <input style="width:300px" type="text" name="number" id="" placeholder="Find Prime Numbers From 1 to Enterd Number">
        <input type="submit" name="submit" id="" value="find">
    </form>
<?php
if(isset($_POST['submit'])){
    if($_POST['number'] == ''){
        echo "<span style=color:red>"."Please Enter Atleast One  Number"."</span>";
    }
    else if($_POST['number'] >0){
        
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
</body>
</html>