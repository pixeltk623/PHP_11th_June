
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-5">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h1">Delete Employeedata</h1>
                </div>
                <form action="" method="post">
                    <div class="table-responsive">
                        <table class="table-delete">
                            <tr>
                                <td>Name</td>
                                <td><?php echo $result[0]['name'];?></td>
                            </tr>
                            
                            <tr>
                                <td>Gender</td>
                                <td><?php echo $result[0]['gender'];?></td>
                            </tr>
                            <tr>
                                <td>Department</td>
                                <td><?php echo $result[0]['department'];?></td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td><?php echo $result[0]['city'];?></td>
                            </tr>
                            <tr>
                                <form method="POST">
                                <td><input type="submit" name="delete" class="btn btn-danger form-control" value="Delete">
                                </td>
                                <td><input type="reset" name="sub" onclick="location.href='<?php echo $mainurl;?>employee_detail'"class="btn btn-info form-control" value="Cancel">
                                </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Department</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $cnt=1;
                            foreach($employee as $employees)
                            {
                            ?>
                            <tr>
                                <td><?php echo $cnt;?></td>
                                <td><?php echo $employees["name"];?></td>
                                <td><?php echo $employees["gender"];?></td>
                                <td><?php echo $employees["department"];?></td>
                                <td><?php echo $employees["city"];?></td>
                                <td> <a href="<?php echo $mainurl;?>edit">Edit</a> |
                                 <a href="<?php echo $mainurl;?>delete?del=<?php echo $employees["employeeid"];?>">Delete</a></td>
                            </tr>
                            <?php
                            $cnt++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>

</html>