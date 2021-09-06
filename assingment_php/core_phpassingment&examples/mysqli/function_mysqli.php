<?php
// how to start connection

ex:  $con=mysqli_connect("localhost","root","","db_name"); 


     if($con)

     {

        echo "connection statblished";
     }

     else
     {


        die(mysqli_error($con))
     }


//how to select database 

ex:   $db=mysqli_select_db("db_name");


//how to excute aby query


ex: $sel="select * from user";

   $query=mysqli_query($sel);


//how to fetch data from database 


ex: $result=mysqli_fetch_array();

    $result=mysqli_fetch_assoc();

    $result=mysqli_fetch_object();

    $no=mysqli_num_rows();


//how to check connectivity


  die(mysqli_error())




  //how to close connection



  mysqli_close();





  



   
   

  









?>