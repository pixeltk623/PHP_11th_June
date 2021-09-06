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

<hr style="solid 1px blue">
</div>


<div class="container-fluid">
<div class="row">
<h3>Manage All Contact</h3>



<div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cnt=1;
                            foreach($shwcont as $shwcont1)
                            {
                            ?>
                            <tr>
                                <td><?php echo $cnt;?></td>
                                <td><?php echo $shwcont1["name"];?></td>
                                <td><?php echo $shwcont1["phone"];?></td>
                                <td><?php echo $shwcont1["email"];?></td>
                                <td><?php echo $shwcont1["message"];?></td>
                                
                                <td>
                                 <a href="<?php echo $mainurl;?>ManageContact?delcontid=<?php echo $shwcont1["contid"];?>"class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> Delete</a></td>
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