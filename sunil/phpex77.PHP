<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $physics = $_POST['physics'];
    $chemistry = $_POST['chemistry'];
    $maths = $_POST['maths'];
    $gujarati = $_POST['gujarati'];
    $sanskrit = $_POST['sanskrit'];
    $submit = $_POST['submit'];
}
if (isset($submit)) {
    if ($name == '') {
        $error1 = 'Name can not be blank';
    }
    elseif (is_numeric($name)) {
        $error1 = "Name must be in letters";
    }
}
if (isset($submit)) {
    if ($physics == '') {
        $error2 = 'Physics Marks can not be blank';
    }
    elseif ($physics>100) {
        $error2 =  "Physics marks must be out of 100";
    }
    elseif ($physics<=0) {
        $error2 = 'Physics Marks can not be Zero or minus';
    }
}
if (isset($submit)) {
    if ($chemistry == '') {
        $error3 = 'Chemistry Marks can not be blank';
    }
    elseif ($chemistry>100) {
        $error3 =  "Chemistry marks must be out of 100";
    }
    elseif ($chemistry<=0) {
        $error3 = 'Chemistry Marks can not be Zero or minus';
    }
}
if (isset($submit)) {
    if ($maths == '') {
        $error4 = 'Maths Marks can not be blank';
    }
    elseif ($maths>100) {
        $error4 =  "Maths marks must be out of 100";
    }
    elseif ($maths<=0) {
        $error4 = 'Maths Marks can not be Zero or minus';
    }
}
if (isset($submit)) {
    if ($gujarati == '') {
        $error5 = 'Gujarati Marks can not be blank';
    }
    elseif ($gujarati>100) {
        $error5 =  "Gujarati marks must be out of 100";
    }
    elseif ($gujarati<=0) {
        $error5 = 'Gujarati Marks can not be Zero or minus';
    }
}
if (isset($submit)) {
    if ($sanskrit == '') {
        $error6 = 'Sanskrit Marks can not be blank';
    }
    elseif ($sanskrit>100) {
        $error6 =  "Sanskrit marks must be out of 100";
    }
    elseif ($sanskrit<=0) {
        $error6 = 'Sanskrit Marks can not be Zero or minus';
    }
}
if (isset($submit)) {
    if (isset($error1)) {
        $error1;
    } 
     elseif (isset($error2)) {
        $error2;
    } elseif (isset($error3)) {
        $error3;
    } elseif (isset($error4)) {
        $error4;
    } elseif (isset($error5)) {
        $error5;
    } elseif (isset($error6)) {
        $error6;
    } else {
           
        if (isset($submit)) {
           $total = ($physics+$chemistry+$maths+$gujarati+$sanskrit);
           $totatsubjectmarks = 500;
           $average = ($total) / 5;
        
              
        if (isset($submit)) {
            if ($average >= 90 && $average <= 100) {
                $grade = "<span style='color:green;font-size:22px;'>Excellent</span>";
            } elseif ($average >= 80 && $average <= 90) {
                $grade = "<span style='color:blue;'font-size:22px;'>O</span>";
            } elseif ($average >= 70 && $average <= 80) {
                $grade = "<span style='color:orange;'font-size:22px;'>Gread A</span>";
            } elseif ($average >= 60 && $average <= 70) {
                $grade = "<span style='color:yellow;'font-size:22px;'>Gread B</span>";
            } elseif ($average >= 50 && $average <= 60) {
                $grade = "<span style='color:purple;'font-size:22px;'>Gread C</span>";
            } elseif ($average >= 40 && $average <= 50) {
                $grade = "<span style='color:pink;'font-size:22px;'>Gread D</span>";
            }
            elseif ($average < 40) {
                $grade = "<span style='color:red;'>Fail Back To Home</span>";
            } 
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
    <title>Student Marksheet Calculator</title>
</head>
<br><br><br>
<style>
    table {
        border-collapse: collapse;
        border: 1px solid blue;
        margin: auto;
        width: 50%;
    }

    table td {
        padding: 10px;
    }
</style>

<body>
    <form method="POST">
        <table border="1">
            <tr>
                <td colspan="2">
                    <h1 style="text-align: center; color:crimson">Enter Sudent Detail</h1>
                </td>
            </tr>
            <tr>
                <th>
                    Name of student
                </th>
                <td><input type="text" placeholder="name of student" name="name">
                    <span style="color: red;"><?php if (isset($error1)) {
                                                  echo  $error1;
                                                }
                                                 ?></span>
                </td>
            </tr>
            <tr>
                <th>Physics marks</th>
                <td><input type="text" placeholder="Enter physics marks" name="physics">
                    <span style="color: red;"><?php if (isset($error2)) {
                                                    echo $error2;
                                                } ?></span>
                </td>
            </tr>
            <tr>
                <th>Chemistry marks</th>
                <td><input type="text" placeholder="Enter chemistry marks" name="chemistry">
                    <span style="color: red;"><?php if (isset($error3)) {
                                                    echo $error3;
                                                } ?></span>
                </td>
            </tr>
            <tr>
                <th>Maths marks</th>
                <td><input type="text" placeholder="Enter maths marks" name="maths">
                    <span style="color: red;"><?php if (isset($error4)) {
                                                    echo $error4;
                                                } ?></span>
                </td>
            </tr>
            <tr>
                <th>Gujarati marks</th>
                <td><input type="text" placeholder="Enter gujarati marks" name="gujarati">
                    <span style="color: red;"><?php if (isset($error5)) {
                                                    echo $error5;
                                                } ?></span>
                </td>
            </tr>
            <tr>
                <th>Sanskrit marks</th>
                <td><input type="text" placeholder="Enter sanskrit marks" name="sanskrit">
                    <span style="color: red;"><?php if (isset($error6)) {
                                                    echo $error6;
                                                } ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; margin:auto"><input type="Submit" name="submit"></td>
            </tr>

        </table>
    </form>

    <br><br><br><br><br>
    <?php
    if (isset($submit)) {
        if (isset($error1)) {
            $error1;
        } elseif (isset($error2)) {
            $error2;
        } elseif (isset($error3)) {
            $error3;
        } elseif (isset($error4)) {
            $error4;
        } elseif (isset($error5)) {
            $error5;
        } elseif (isset($error6)) {
            $error6;
        }
        else {
            if (isset($submit)) {
    ?>

                <table border="1" style="border:1px solid blueviolet; text-align:center;">
                <tr>
                    <td>Name</td>
                    <td colspan="2"><?php echo $name; ?></td>
                </tr>
                <tr><td>Physics</td>
            <td colspan="2"><?php echo $physics; ?></td></tr>
            <tr><td>Chemistry</td>
            <td colspan="2"><?php echo $chemistry; ?></td></tr>
            <tr><td>Maths</td>
            <td colspan="2"><?php echo $maths; ?></td></tr>
            <tr><td>Gujarati</td>
            <td colspan="2"><?php echo $gujarati; ?></td></tr>
            <tr><td>Sanskrit</td>
            <td colspan="2"><?php echo $sanskrit; ?></td></tr>
            <tr style="border: 2px solid blue">
                <th>Total Subject Marks</th>
                <th colspan="2"><?php echo $totatsubjectmarks; ?></th>
            </tr>
                    <tr style="border: 2px solid blue">
                        <th colspan="2">Total Marks Of Student</th>
                        <th><?php echo $total; ?></th>
                    </tr>
                    <tr style="border: 2px solid blue">
                        <th colspan="2">Percentage</th>
                        <th><?php echo $average; ?></th>
                    </tr>
                    <tr style="border: 2px solid blue">
                        <th colspan="2">Result</th>
                        <th><?php echo $grade; ?></th>
                    </tr>


                </table>

    <?php
            }
        }
    }
    ?>

</body>
<br><br><br><br><br>
</html>