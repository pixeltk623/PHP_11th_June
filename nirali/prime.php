<?php
$prime='';
           if (isset($_POST['submit'])) {
    
    for ($i=2; $i<=$_POST['num']; $i++) { 
         $chk= checkPrime($i);
        if ($chk=="prime") {
            $prime.=$i.',';
        }/*else{
            $prime.=$i.',';
        }*/
    }
     $prime;
}
function checkPrime($n){
$count=0;
for ($i=2; $i <$n ; $i++) { 
    if ($n%$i==0) {
        $count++;
        break;
    }

}
if ($count==1) {
    return"NOT prime"; 
}else{
    return "prime";
}

}
$num=1;
if ($num%2==1) {
    
}else{
    echo "Not ";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
    </style>
</head>
<body>

<form method="post">
    <label>Enter The Number</label>
    <input type="text " name="num">
    <input type="submit" name="submit">
    <span style="color:red;">
        <?php
         if (isset($prime)){
         echo$prime;
    }
    ?></span>
</form>
</body>
</html>