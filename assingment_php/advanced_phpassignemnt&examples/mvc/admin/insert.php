            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-5">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h1">Add Employee</h1>
                </div>
                <form action="" method="post">
                    <div class="table-responsive">
                        <table class="table-insert">
                            <tr>
                                <td>Name</td>
                                <td><input type="text" name="name" class="form-control"requred></td>
                                <td>Department</td>
                                <td><input type="text" name="department" class="form-control"requred></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <select name="gender" class="form-control"requred>
                                        <option value="">--Select Gender--</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </td>
                                <td>City</td>
                                <td><input type="text" name="city" class="form-control"requred></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="sub" class="btn btn-success form-control" value="SAVE">
                                </td>
                                <td></td>
                                <td><input type="reset" name="can" class="btn btn-danger form-control" value="Cancel">
                                </td>
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