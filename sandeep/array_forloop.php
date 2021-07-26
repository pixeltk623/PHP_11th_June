<?php
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
        td{
            padding:10px;
            border:1px solid black;
        }
    </style>
</head>
<body>
    <form method="post">
    <input style="width: 300px;" type="text" name="count" id="" placeholder="Enter Number Of Employee Data To Print">
    <input type="submit" name="submit" id="">
<br><br>
    <?php
    if(isset($_POST['submit'])){
        if(($_POST['count']) == ''){
        echo "<span style=color:red >".'Enter Number please'." </span>";
        }
        else{
            if($_POST['count']>count($EmployeeDetail)){
                // echo "<span> </span>";
                echo "<span style=color:red >".'Enter value lessthan  :- '.
                count($EmployeeDetail)."</span>";
            }
            else {
    ?>
    <table style="border:1px solid black;margin:auto">
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

         <!-- <?php
        foreach ($EmployeeDetail as $key =>$value){
            ?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $value ['name']  ?></td>
            <td><?php echo $value ['Education']  ?></td>
            <td><?php echo $value ['d.o.j']  ?></td>
            <td><?php echo $value ['POST']  ?></td>
            <td><?php echo $value ['salary']  ?></td>
        </tr>
            <?php
        }
        ?>  -->
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



