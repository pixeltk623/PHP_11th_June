
<?php
if (isset($_POST['submit'])){
$salary =$_POST['salary'];
$designation =$_POST['designation'];
$name=$_POST['name'];
$time =$_POST['month'];

//Conditions - Equations 
if(isset($name)){
    
    if($name ==''){
      $errorname= 'Please Enter Name';
    }
    else {
     if(is_numeric($name)){
       $errorname ='Do Not Enter Number';}
     else {
          $name;
     }   
    }
}

if(isset($salary)){ 
   if($salary == ''){
     $errorsalary ="cannot be blank";
   }
   else{
       if(is_numeric($salary)){
           $salary;
       }
       else{
        $errorsalary ="number nakho";
       }
   }
}




if($time =="blank"){
     $errortime= '';
}
if(isset($designation)){
    if($designation =="blank"){
        $errordesignation =" ";
   }else{
    switch($designation){

        case "junior":
            $houseRent= "Not applicable";
            $specialAllowance="Not applicable";
            $convey="Not applicable";
            $AdditionalAllow="Not applicable";
            $onCallShift="Not applicable";
            $stat="Not applicable";
            $PF="Not applicable";
            $proffesionalTax="Not applicable";
            $incomeTax="Not applicable";            
            $GROSS=$salary;
            $DEDUCTIONGROSS= 0 ;
            if (isset($errorname)){
                $errorname;        
            }
            else if (isset($errorsalary)){
                $errorsalary;        
            }
            else if (isset($errortime)){
                $errortime;        
            }
            else if(isset($errordesignation)){
                $errordesignation;        
            }
            else{
            $NETPAY= $GROSS-$DEDUCTIONGROSS;}
            break;
    
        case "senior":
            $houseRent= 3000;
            $specialAllowance=1000;
            $convey=1000;
            $AdditionalAllow=1000;
            $onCallShift=1000;
            $stat=500;
            if (isset($errorname)){
                $errorname;        
            }
            else if (isset($errorsalary)){
                $errorsalary;        
            }
            else if (isset($errortime)){
                $errortime;        
            }
            else if(isset($errordesignation)){
                $errordesignation;        
            }
            else{
            $PF=($salary* 10)/(100);//
            $proffesionalTax=($salary*10)/100;//
            $incomeTax=($salary*10)/100; //
            $GROSS=$salary+$onCallShift+$AdditionalAllow+$houseRent+$specialAllowance
            +$convey;
            $DEDUCTIONGROSS=$incomeTax+$proffesionalTax+$PF;
            $NETPAY=$GROSS-$DEDUCTIONGROSS;
            }
            break;
    
        case "manager":
                $houseRent=5000;
                $specialAllowance=3000;
                $convey=3000;
                $AdditionalAllow=3000;
                $onCallShift=3000;
                $stat=1000;
                if (isset($errorname)){
                    $errorname;        
                }
                else if (isset($errorsalary)){
                    $errorsalary;        
                }
                else if (isset($errortime)){
                    $errortime;        
                }
                else if(isset($errordesignation)){
                    $errordesignation;        
                }
                else{
                $PF=($salary*(19))/(100);
                $proffesionalTax=($salary * (19))/(100);
                $incomeTax=($salary * (19))/(100);
                $GROSS=$salary+$onCallShift+$AdditionalAllow+$houseRent+$specialAllowance
                +$convey;
                $DEDUCTIONGROSS=$incomeTax+$proffesionalTax+$PF;
                $NETPAY=$GROSS-$DEDUCTIONGROSS;}
              break;
    }
   }
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:70%;
            border:2px solid blue;
            border-collapse:collapse;
            margin:auto;
           
        }
        table td{
            padding:8px;
            border:1px solid blue;
        }
        
    </style>
</head>
<body>
    <form action="" method ="post">
        <table>
            <tr>
                <td style="text-align:center;font-size:30px;padding:10px" colspan="2">TOPS Institute</td>
            </tr>
            <tr>
                <td style="text-align:center;font-size:20px" colspan="2">Employee Salary Details</td>
            </tr>
            <tr>
                <td><label for="">Name :</label></td>
                <td><input style="width:60%" type="text" name="name" id="">
                    <?php if (isset($errorname)){
                            echo $errorname ;
                    }?>
            </td>
            </tr>
            <tr>
                <td><label for="" name="">salary :</label></td>
                <td><input style="width:60%" type="text" name="salary" id="">
                    <?php if (isset($errorsalary)){
                            echo $errorsalary ;}?> </td>
            </tr>
            <tr>
                <td>Month</td>
                <td>
                    <select id="" name="month">
                        <option value="blank"></option>
                        <option value="january">january</option>
                        <option value="february">February</option>
                        <option value="march">March</option>
                        <option value="april">April</option>
                        <option value="may">May</option>
                        <option value="june">June</option>
                        <option value="july">July</option>
                        <option value="august">August</option>
                        <option value="september">September</option>
                        <option value="october">October</option>
                        <option value="november">November</option>
                        <option value="december">December</option>
                    </select>
                    <?php if (isset($errortime)){
                            echo $errortime="Select Valid Month";
                    }?>
                </td>
            </tr>
            <tr>
                <td><label for="">Designation :</label></td>
                <td>
                    <select name="designation" id="" >
                        <option value="blank"></option>
                        <option value="junior">Junopr Developer</option>
                        <option value="senior">Senior Developer</option>
                        <option value="manager">Department Head</option></select>  
                    <?php if (isset($errordesignation)){
                            echo $errordesignation = "Select Valid Option";
                    }?>                  
                </td>
            </tr>
          
            <tr><td style="text-align:center;font-size:20px" colspan="2">
            <input style="background-color:green;color:white;" type="submit" name="submit" id="" value="Generate Salary slip"></td></tr>
        
        </table>
    </form>
    <br><br>

    <!-- salary slip Output -->
<?php
if(isset($_POST['submit'])){

    if (isset($errorname)){
        $errorname;        
    }
    else if (isset($errorsalary)){
        $errorsalary;        
    }
    else if (isset($errortime)){
        $errortime;        
    }
    else if(isset($errordesignation)){
        $errordesignation;        
    }
    else{
?>

<table style="width:90%;font-size:12px">
        <tr>
            <td style="text-align:center;font-size:30px;padding:10px" colspan="4"> Pay Sleep Of month <?php echo $time ?> 2020 </td>
        </tr>
        <tr>
            <td>presonal No.</td>
            <td>0123456789</td>
            <td>Name :</td>
            <td><?php echo $name;?></td>
        </tr>
        <tr>
            <td>BANK :</td>
            <td>ICICI</td>
            <td>BAnk A/c no.:</td>
            <td>01234567890</td>
        </tr>
        <tr>
            <td>DOJ :</td>
            <td>01/01/2010</td>
            <td>LOP Days:</td>
            <td>0</td>
        </tr>
        <tr>
            <td>PF No.</td>
            <td>PF/123/PF</td>
            <td>STD DAYS</td>
            <td>30</td>
        </tr>
        <tr>
            <td>Location :</td>
            <td>Banglore</td>
            <td>Worked Days</td>
            <td>30</td>
        </tr>
        <tr>
            <td>Department :</td>
            <td>IT</td>
            <td>Designation :</td>
            <td>Software Engineer</td>
        </tr>
    </table>
    <br><br>
    <table style="width:90%;font-size:12px">
        <tr>
            <td style="background-color:green;color:white;text-align:center"><b> Earnings </b></td>
            <td style="background-color:green;color:white;text-align:center"><b>Amount in Rs.</b></td>
            <td style="background-color:green;color:white;text-align:center"><b>Deductions</b></td>
            <td style="background-color:green;color:white;text-align:center"><b>Amount In Rs.</b></td>           
        </tr>

        <tr>
            <td>Basic Pay :</td>
            <td><?php echo $salary;  ?></td>
            <td>PROVIDENT FUND:</td>
            <td><?php  echo $PF; ?></td>
        </tr>
        <tr>
            <td>HOUSE RENT ALLOWANCE :</td>
            <td><?php echo $houseRent ;?> </td>
            <td>PROFESSIONAL TAXES :</td>
            <td><?php     echo $proffesionalTax; ?></td>
        </tr>
        <tr>
            <td>SPECIAL ALLOWANCE :</td>
            <td><?php echo  $specialAllowance;   ?></td>
            <td>INCOME TAX:</td>
            <td><?php  echo $incomeTax;  ?></td>
        </tr>
        <tr>
            <td>CONCEYNANCE :</td>
            <td><?php echo $convey  ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>ADITIONAL SPECEIAL ALLOWANCE :</td>
            <td><?php echo $AdditionalAllow ;  ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>ONCALL/SHIFT ALLOWANCE :</td>
            <td><?php echo $onCallShift;  ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>STAT BONUS :</td>
            <td><?php echo         $stat;    ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>GROSS EARNING :</td>
            <td><?php echo $GROSS ?></td>
            <td>GROSS DEDUCTION :</td>
            <td><?php echo $DEDUCTIONGROSS ?></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align:right">NET PAY :</td>
            <td><?php echo $NETPAY ?></td>
            <td></td>
        </tr>
        
    </table>
<?php
}
}
?>
</body>
</html>