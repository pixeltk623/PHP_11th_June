<?php
if(!isset($_SESSION["aid"]))
{
    echo "<script>
        window.location='./';
    </script>";
}
?>
<html>
    <head>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    </head>
    <body>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h3>Add Products</h3>
                <h3 align="right" style="float:right; margin-left:55%"><a href="<?php echo $mainurl;?>manageproduct" class="btn btn-danger btn-lg">Manage Products</a></h3>
                <hr style="color:soild red 1px">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-xs-12 col-md-offset-2">
                        <div class="jumbotron">
                            <form action="" method="post" enctype="multipart/form-data">
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
                                            <td>Select SubCategory</td>
                                            <td>
                                                <select name="subcategories" tabindex="4" required class="form-control" style="width:91%">
                                                    <option value="">-select Subcategory-</option>
                                                    <?php
                                                    foreach($subcat as $subcat1)
                                                    {
                                                    ?> 
                                                    <option value="<?php echo $subcat1["subcat_id"];?>"><?php echo $subcat1["subcategories"];?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Select Product Image1</td>
                                            <td><input type="file" name="pimg1" class="form-control"requred></td>
                                        </tr>
                                        <tr>
                                            <td>Select Product Image2</td>
                                            <td><input type="file" name="pimg2" class="form-control"requred></td>
                                        </tr>
                                        <tr>
                                            <td>Select Product Image3</td>
                                            <td><input type="file" name="pimg3" class="form-control"requred></td>
                                        </tr> 
                                        <tr>
                                            <td>Enter Product Name</td>
                                            <td><input type="text" name="pname" class="form-control"requred></td>                             
                                        </tr>
                                        <tr>
                                            <td>Enter Product Qty</td>
                                            <td><input type="number" name="qty" class="form-control"requred></td>
                                        </tr>
                                        <tr>
                                            <td>Enter Old Price</td>
                                            <td><input type="text" name="oldprice" class="form-control"requred></td>
                                        </tr>
                                        <tr>
                                            <td>Enter New Price</td>
                                            <td><input type="text" name="newprice" class="form-control"requred></td>
                                        </tr>
                                        <tr>
                                            <td>Select Date</td>
                                            <td><input type="date" name="catdate" class="form-control"requred></td>
                                        </tr>
                                        <tr>
                                            <td>Enter Product Description</td>
                                            <td><textarea name="pdesc" class="form-control" requred></textarea></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="submit" name="addprod" class="btn btn-success form-control" value="ADDPRODUCTS"></td>
                                        </tr>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>