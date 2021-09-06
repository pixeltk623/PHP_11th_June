<?php
setcookie("user","Brijesh",time()+3600*24);
?>

<html>
    <body>
        <?php
         if(!isset($_COOKIE["user"]))

         {

            echo "Sorry Cookies is not found";


         }

         else

         {

            echo "Cookie values are :".$_COOKIE["user"];


         }


        ?>
    </body>
</html>