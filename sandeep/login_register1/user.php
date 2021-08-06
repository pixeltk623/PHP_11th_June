<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if(isset($_POST['submit'])){
$EmployeeDetail= array(
    array( 
        "name"=>"sandip Memariya",
        "branch"=>"Bhavnagar",
        "Education"=>"B.E",
        "d.o.j"=>"19-12-2020",
        "POST"=>"MANAGER",
        "salary" =>"200000"
    ),
    array( 
        "name"=>"Nilesh kanjariya",
        "branch"=>"Botad",
        "Education"=>"B.E",
        "d.o.j"=>"19-12-2020",
        "POST"=>"MANAGER",
        "salary" =>"200000"
    ),
    array( 
        "name"=>"Sunil kanjariya",
        "branch"=>"Vadodra",
        "Education"=>"B.E",
        "d.o.j"=>"19-12-2020",
        "POST"=>"MANAGER",
        "salary" =>"200000"
    ),
    array( 
        "name"=>"ravi Parmar",
        "branch"=>"Ahmedabar",
        "Education"=>"B.E",
        "d.o.j"=>"19-12-2020",
        "POST"=>"MANAGER",
        "salary" =>"200000"
    ),
    array( 
        "name"=>"rahul Patel",
        "branch"=>"Surat",
        "Education"=>"B.E",
        "d.o.j"=>"19-12-2020",
        "POST"=>"MANAGER",
        "salary" =>"200000"
    )
);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Table</title>
    <style>
       
        button{
            background-color: cadetblue;
            border: none;
            font-size: 20px;
            width: 130px;
            font-weight: 900;
            height: 40px;
            border-radius: 40px;
          transform: translateX(40vw);
        }a{
            color: white;
            text-decoration: none;

        }
        table{
            width: 80%;
            border :3px solid cadetblue ;
            border-collapse: collapse;
            margin: auto;
            margin-top: 10vh;
           
        }
        td{
            border: 1px solid cadetblue;
            padding: 5px;
            color: cadetblue;
        }
    </style>
</head>
<body>
    <form method="post">
    <input style="border-radius:10px;padding-left:15px;border :1px solid cadetblue;width: 300px;height:30px;" type="text" name="count" id="" placeholder="Enter Number Of Employee Data To Print">
    <input style="background-color: cadetblue;color:white;border:none;width:120px;height:35px;border-radius:10px;" type="submit" name="submit" id="">
    
    <button><a href="logout.php">LOGOUT</a></button>
    <br><br>
    <?php
    if(isset($_POST['submit'])){
        if(($_POST['count']) == ''){
        echo "<span style=color:red >".'Enter Number please'." </span>";
        }
        else{
            if($_POST['count']>count($EmployeeDetail)){
                echo "<span style=color:red >".'Enter value lessthan  :- '.
                count($EmployeeDetail)."</span>";
            }
            else {
    ?>
    <table>
      <tr><td colspan="7" style="text-align:center;font-size:30px">SBI MANAGER LIST</td></tr>
    <tr>
            <td>Sr.no</td>
            <td>Name</td>
            <td>Qualification</td>
            <td>D.O.J</td>
            <td>Branch</td>
            <td>Post</td>
            <td>Salary</td>
    </tr>
      <?php
        for($i=0;$i<=$_POST['count']-1;$i++){
            ?> 
            <tr>
                <td><?php echo($i+1) ?></td>
                <td><?php echo $EmployeeDetail [$i]['name']  ?></td>
                <td><?php echo $EmployeeDetail [$i]['Education']  ?></td>
                <td><?php echo $EmployeeDetail [$i]['d.o.j']  ?></td>
                <td><?php echo $EmployeeDetail [$i]['branch']  ?></td>
                <td><?php echo $EmployeeDetail [$i]['POST']  ?></td>
                <td><?php echo $EmployeeDetail [$i]['salary']  ?></td>
            </tr>
            <?php
        }
        ?> 

        
       <tr><td style="color: red;" colspan="7">Total Number Of Empoloyee Data Available : <?php echo "<span style= color:blue>".count($EmployeeDetail)."</span>" ?> </td></tr>
    </table>
    <?php
     }
 }
}
?>
    </form>
</body>
</html>



