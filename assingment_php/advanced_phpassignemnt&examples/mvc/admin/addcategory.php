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
<h2>Add Category</h2>

<h2 align="right" style="float:right; margin-left:55%"><a href="<?php echo $mainurl;?>managecategory" class="btn btn-danger btn-lg">Manage Category</a></h2>

<hr style="color:soild red 1px">
</div>


<div class="container-fluid">
<div class="row">
<div class="col-md-8 col-xs-12 col-md-offset-2">
  
<div class="jumbotron">
<form action="" method="post">
                    <div class="table-responsive">
                        <table class="table-insert">
                            <tr>
                                <td>Enter Category</td>
                                <td><input type="text" name="catname" class="form-control"requred></td>
                             
                            </tr>

                            <tr>
                                <td>Select Date</td>
                                <td><input type="date" name="catdate" class="form-control"requred></td>
                             
                            </tr>
                            <tr>
                              
                            <tr>
                                <td></td>
                                <td><input type="submit" name="addcat" class="btn btn-success form-control" value="ADDCATEGORY">
                                </td>
                               
                            </tr>
                        </table>
                    </div>
                </form>




</div>
</div>

</main>
</body>
</html>