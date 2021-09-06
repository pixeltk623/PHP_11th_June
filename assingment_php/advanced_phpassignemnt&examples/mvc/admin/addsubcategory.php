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
<h3>Add Sub Category</h3>

<h3 align="right" style="float:right; margin-left:55%"><a href="<?php echo $mainurl;?>managesubcategory" class="btn btn-danger btn-lg">Manage SubCategory</a></h3>

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
                            <td>Select Category</td>
                            <td>
                                <select name="categories" tabindex="4" required class="form-control" style="width:91%">
                                    <option value="">-select category-</option>
                                    <?php
                                    foreach($st as $st1)
                                    {
                                    ?>  

                                    <option value="<?php echo $st1["Cat_id"];?>"><?php echo $st1["categories"];?></option>
                                
                                <?php
                                    }

                                    ?>
                                </select>
                            </td>
                            </tr>
                            <tr>
                                <td>Enter SubcategoryName</td>
                                <td><input type="text" name="subcatname" class="form-control"requred></td>
                             
                            </tr>
                           
                            <tr>
                                <td>Select Date</td>
                                <td><input type="date" name="catdate" class="form-control"requred></td>
                             
                            </tr>
                            <tr>
                              
                            <tr>
                                <td></td>
                                <td><input type="submit" name="addsubcat" class="btn btn-success form-control" value="ADDSUBCATEGORY">
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