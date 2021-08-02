 <?php 

                 while ($response = mysqli_fetch_assoc($result)) {
                    ?>
                        <li><i class="<?php echo $response['class']; ?>"></i> <a href="#"><?php echo $response['name']; ?></a></li>
                    <?php
                }

                   // foreach ($allCourses as $key => $value) {
                        ?>
                        <!--     <li><i class="<?php echo $value['class']; ?>"></i> <a href="#"><?php echo $value['name']; ?></a></li> -->
                        <?php
                    //}
                ?>