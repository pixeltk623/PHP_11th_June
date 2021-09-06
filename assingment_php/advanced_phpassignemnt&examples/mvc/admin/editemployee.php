<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-5">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h1">Edit Employee</h1>
                </div>

                <?php
                   foreach($edemp as $edemp1)
                   {
                ?>
                <form action="" method="post">
                    <div class="table-responsive">
                        <table class="table-insert">
                            <tr>
                                <td>Name</td>
                                <td><input type="text" name="name" value="<?php echo $edemp1["name"];?>" class="form-control"requred></td>

                                </tr>
                                <tr>
                                <td>Department</td>
                                <td><input type="text" name="department" value="<?php echo $edemp1["department"];?>" class="form-control"requred></td>
                            
                            </tr>

                            <tr>

                                <td>Gender</td>
                                <td>
                                    <select name="gender" class="form-control"requred>
                                        <option value="">--Select Gender--</option>
                                       <?php
                                       if($edemp1["gender"]=='male')
                                       { 
                                       ?>

                                        <option value="male" selected="selected"><?php echo $edemp1["gender"];?></option>
                                       <?php
                                       }
                                       else
                                       {
                                    ?>

                                     <option value="female">Female</option>

                                     <?php
                                     }
                                     ?>

                                        <?php
                                       if($edemp1["gender"]=='female')
                                       { 
                                       ?>

                                        <option value="female" selected="selected"><?php echo $edemp1["gender"];?></option>
                                       <?php
                                       }
                                       else
                                       {
                                    ?>

                                     <option value="female">Female</option>

                                     <?php
                                     }
                                     ?>  </select>
                                </td>

                                </tr>
                                <tr>
                                <td>City</td>
                                <td><input type="text" name="city" value="<?php echo $edemp1["city"];?>" class="form-control"requred></td>
                           
                       </tr>
<tr>
                    
                                <td></td>
                                <td><input type="submit" name="upd" class="btn btn-success form-control" value="UPDATE">
                                </td>
                               
                            </tr>
                        </table>

                        <?php
                   }

                   ?>
                    </div>
                </form>
          