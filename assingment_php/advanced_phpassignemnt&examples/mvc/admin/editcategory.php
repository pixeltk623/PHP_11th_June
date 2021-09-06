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
                <h2>Edit Category</h2>
                <hr style="color:soild red 1px">
            </div>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-xs-12 col-md-offset-2">
                        <div class="jumbotron">
                            <?php
                            foreach($edcat as $edcat1)
                            {
                            ?>
                            <form action="" method="post">
                                <div class="table-responsive">
                                    <table class="table-insert">
                                        <tr>
                                            <td>Enter Category</td>
                                            <td><input type="text" name="catname" value="<?php echo $edcat1["categories"];?>" class="form-control"requred></td>
                                        
                                        </tr>

                                        <tr>
                                            <td>Select Date</td>
                                            <td><input type="date" name="catdate" value="<?php echo $edcat1["date"];?>" class="form-control"requred></td>
                                        
                                        </tr>
                                        <tr>
                                        
                                        <tr>
                                            <td></td>
                                            <td><input type="submit" name="updcat" class="btn btn-success form-control" value="UPDATE">
                                            </td>
                                        
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
    </body>
</html>