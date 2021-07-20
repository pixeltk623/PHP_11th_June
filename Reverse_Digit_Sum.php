<?php
if(isset($_POST['submit'])){
    $number=$_POST['number'];
    $operation=$_POST['operation'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TRAINING</title>
</head>
<body>
    
    <form action="" method="post">
        <input style="width:250px" type="text" name="operation" placeholder="1:-sum,2:-digit,3:-reverse"> 
        <br><br>
        <input style="width:250px" type="text" name="number" id=""><br><br>
        <input style="margin-left:85px;" type="submit" value="calculate" name="submit">
    </form>
    <br>
    <br>
    <?php
if(isset($_POST['submit'])){

    switch($_POST['operation']){

        case 1:
            $sum=0;
            for($i=1;$i<=$number;$i++){
             $sum=$sum+$i;
            }
            echo "<span style=color:green>"."Your sum of Number Is :- ".$sum."</span>";
            break;
    
        case 2:    
            $count=0;
            for($i=$number;$i!=0;$i=$i/10){
               $i =round($i/10);
               $count++;
            }
            // while($number!=0){
            //     $number=round($number/10);
            //     $count++;
            // }
            echo  "<span style=color:blue>"."Your Number's Digits Are :- ".$count."</span>";
            break;
    
       case 3:             
        $rev=0;
        for($i=$number;$i>1;$i=$i/10){
            $r =$i % 10 ;
            $rev=($rev *10 ) + $r;            
        }
        echo "<span style=color:purple>"."Your Reversed Number Is :- ".$rev."</span>";
        break;


            // while($number>1){
            //     $r =$number%10;
            //     $rev=($rev *10 )+$r;
            //     $number=$number/10;
            // }
    

        default:
        echo "<span style=color:red>"."Enter Valid Value"."</span>";
    
        } 
}

    ?>

</body>
</html>