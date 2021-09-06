<body>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3>Edit Products</h3>
            <h3 align="right" style="float:right; margin-left:55%"><a href="<?php echo $mainurl;?>manageproduct" class="btn btn-danger btn-lg">Manage Products</a></h3>
            <hr style="color:soild red 1px">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-xs-12 col-md-offset-2">
                    <div class="jumbotron">
                        <?php
                        foreach($edprod as $edprod1)
                        {
                        ?>
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

                                                if($st1["Cat_id"]==$edprod1["Cat_id"])
                                                {
                                            ?>  
                            
                                            <option value="<?php echo $edprod1["Cat_id"];?>" selected="selected"><?php echo $edprod1["categories"];?></option>
                                        
                                            <?php
                                            }
                                            else
                                            {

                                            ?>                        
                                            <option value="<?php echo $st1["Cat_id"];?>"><?php echo $st1["categories"];?></option>
                                            <?php
                                                }
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
                                                    if($subcat1["subcat_id"]==$edprod1["subcat_id"])
                                                {
                                                ?>  
                            
                                                <option value="<?php echo $edprod1["subcat_id"];?>" selected="selected"><?php echo $edprod1["subcategories"];?></option>
                                        
                                                <?php
                                                }
                                                else
                                                {

                                                ?>                        
                                                <option value="<?php echo $subcat1["subcat_id"];?>"><?php echo $subcat1["subcategories"];?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Select Product Image1 <img src="<?php echo $mainurl.$edprod1["image1"];?>" alt="image1" width="80px" height="80px" ></td>
                                        <td><input type="file" name="pimg1" value="<?php echo $edprod1["image1"];?>" class="form-control"requred></td>
                                    </tr>
                                    <tr>
                                        <td>Select Product Image2 <img src="<?php echo $mainurl.$edprod1["image2"];?>" alt="image2" width="80px" height="80px" ></td>
                                        <td><input type="file" name="pimg2" value="<?php echo $edprod1["image2"];?>" class="form-control"requred></td>
                                    </tr>
                                    <tr>
                                        <td>Select Product Image3 <img src="<?php echo $mainurl.$edprod1["image3"];?>" alt="image3" width="80px" height="80px" ></td>
                                        <td><input type="file" name="pimg3" value="<?php echo $edprod1["image3"];?>" class="form-control"requred></td>
                                    </tr> 






                                    <tr>
                                        <td>
                                        <td><input type="hidden" name="pimg11" value="<?php echo $edprod1["image1"];?>" class="form-control"requred></td>
                                    </tr>
                                    <tr>
                                       
                                        <td><input type="hidden" name="pimg22" value="<?php echo $edprod1["image2"];?>" class="form-control"requred></td>
                                    </tr>
                                    <tr>
                                     
                                        <td><input type="hidden" name="pimg33" value="<?php echo $edprod1["image3"];?>" class="form-control"requred></td>
                                    </tr> 










                                    <tr>
                                        <td>Enter Product Name</td>
                                        <td><input type="text" name="pname" value="<?php echo $edprod1["productname"];?>" class="form-control"requred></td>                             
                                    </tr>
                                    <tr>
                                        <td>Enter Product Qty</td>
                                        <td><input type="number" name="qty" value="<?php echo $edprod1["qty"];?>" class="form-control"requred></td>
                                    </tr>
                                    <tr>
                                        <td>Enter Old Price</td>
                                        <td><input type="text" name="oldprice" value="<?php echo $edprod1["oldprice"];?>" class="form-control"requred></td>
                                    </tr>
                                    <tr>
                                        <td>Enter New Price</td>
                                        <td><input type="text" name="newprice" value="<?php echo $edprod1["newprice"];?>" class="form-control"requred></td>
                                    </tr>
                                    <tr>
                                        <td>Select Date</td>
                                        <td><input type="date" name="catdate" value="<?php echo $edprod1["date"];?>" class="form-control"requred></td>
                                    </tr>
                                    <tr>
                                        <td>Enter Product Description</td>
                                        <td><textarea name="pdesc" class="form-control" requred><?php echo $edprod1["description"];?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><input type="submit" name="updprod" class="btn btn-success form-control" value="UPDATEPRODUCTS"></td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</html>