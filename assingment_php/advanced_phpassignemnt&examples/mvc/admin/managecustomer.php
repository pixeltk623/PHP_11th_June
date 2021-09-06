<?php
if(!isset($_SESSION["aid"]))
{
    echo "<script>
        window.location='./';
    </script>";
}
?>

<html>
    <meta charset="utf-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Luxury watch shopping</title>
	
    <meta property="og:title" content="50% of on Luxury watches" />
    <meta property="og:description" content="Welcome to Luxury watches" />
    <meta property="og:url" content="https://www.rajkotestate.com/welcome-To-Lucxury-Watches" />
    
    <meta property="og:image" content="https://www.rajkotestate.com/uploads/property/1059.jpg">


</html>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-5">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

<hr style="solid 1px blue">
</div>

<form method="post" action="download.php">

<div class="container-fluid">
<div class="row">
<h3>Manage All Customer</h3>



<input type="submit" name="export" value="Export Customer In CSV" class="btn btn-lg btn-danger" style="float:right; margin-left:78%">



<div class="table-responsive" style="overflow:scroll !important">
                    <table class="table  table-sm" style="width:100% !important">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Hobby</th>
                                <th>gender</th>
                                <th>Pincode</th>
                                <th>Address</th>
                                <th>State</th>
                                <th>City</th>
                                <th style="width:350% !important; float:left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cnt=1;
                            foreach($shwcust as $shwcust1)
                            {
                            ?>
                            <tr>
                                <td><?php echo $cnt;?></td>
                                <td><img src="../<?php echo $shwcust1["photo"];?>" width="100px" heifht="60px"></td>
                                <td><?php echo $shwcust1["firstname"];?></td>
                                <td><?php echo $shwcust1["lastname"];?></td>
                                <td><?php echo $shwcust1["email"];?></td>
                                <td><?php echo $shwcust1["mobile"];?></td>
                                <td><?php echo $shwcust1["hobby"];?></td>
                                <td><?php echo $shwcust1["gender"];?></td>
                                <td><?php echo $shwcust1["pincode"];?></td>
                                <td><?php echo $shwcust1["address"];?></td>
                                <td><?php echo $shwcust1["sname"];?></td>
                                <td><?php echo $shwcust1["ctname"];?></td>
                             
                               <td style="width:350% !important; float:left">

                               <a href="https://api.whatsapp.com/send?phone=919998003879&text=https://www.rajkotestate.com/" class="btn btn-sm btn-success"><span class="fa fa-whatsapp"></span> SendOffer</a>


                               <a href="<?php echo $mainurl;?>ManageCustomer?delcustid=<?php echo $shwcust1["custid"];?>"class="btn btn-sm btn-info"><span class="fa fa-inbox"></span> SendEmail</a>

                                 <a href="<?php echo $mainurl;?>ManageCustomer?delcustid=<?php echo $shwcust1["custid"];?>"class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> Delete</a></td>
                            </tr>
                            <?php
                            $cnt++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>





</div>
</div>

</main>
</body>
</html>