<?php
if(!isset($_SESSION["aid"]))
{
    echo "<script>
        window.location='./';
    </script>";
}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-5">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h2 class="h1">Dashboard</h2>
<hr style="color:soild red 1px">
</div>


<div class="container-fluid">
<div class="row">

<div class="col-md-3 col-xs-12">
<div class="jumbotron">
<h4>TotalCustomer</h4>
<hr style="border:solid 1px blue">

<div class="badge badge-lg" style="background-color:red; font-size:25px; color:white; width:100%">  <a href="<?php echo $mainurl;?>ManageCustomer" style="color:white"><span class="fa fa-users"></span> <?php echo $totcust[0]["total"];?></a></div>
</div>
</div>




<div class="col-md-3 col-xs-12">
<div class="jumbotron">
<h4>TotalFeedback</h4>
<hr style="border:solid 1px blue">

<div class="badge badge-lg" style="background-color:red; font-size:25px; color:white; width:100%"><span class="fa fa-comment-o"></span></div>
</div>
</div>



<div class="col-md-3 col-xs-12">
<div class="jumbotron">
<h4>TotalContact</h4>
<hr style="border:solid 1px blue">

<div class="badge badge-lg" style="background-color:red; font-size:25px; color:white; width:100%"><a href="<?php echo $mainurl;?>ManageContact" style="color:white"><span class="fa fa-comment-o"></span><?php echo $totcont[0]["total"];?></a></div>
</div>
</div>




<div class="col-md-3 col-xs-12">
<div class="jumbotron">
<h4>TotalProduct</h4>
<hr style="border:solid 1px blue">

<div class="badge badge-lg" style="background-color:red; font-size:25px; color:white; width:100%"><span class="fa fa-shopping-cart"></span> 0</div>
</div>
</div>








</div>
</div>

</main>
</body>
</html>