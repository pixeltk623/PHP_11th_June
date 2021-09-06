            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-5">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h1">Employee Data</h1>
                </div>

                <a class="new-emp" href="<?php echo $mainurl;?>insert">Add new employee</a>
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
                                <td> <a href="<?php echo $mainurl;?>EditEmployee?edempid=<?php echo $employees["employeeid"];?>">Edit</a> |
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