<?php
   
   if (isset($_POST['submit'])) {
     $number = $_POST['number'];
 
for ($i = 0; $i <= 100; $i+=5) {
  echo "The number is: $i <br>";

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
    <label>Enter The Number </label>
    <input type="text" name="number">
    <input type="submit" name="submit" value="submit">

  </form>
 

</body>
</html>