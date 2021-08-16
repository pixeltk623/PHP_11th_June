<?php 

    include_once '../database/database.php';
    if (isset($_SESSION['is_admin_login']) && isset($_SESSION['admin_id']) ) {
        // echo "<pre>";

        // print_r($_SESSION);

        $query = "SELECT * FROM `admin` WHERE id = ".$_SESSION['admin_id'];

        $result = mysqli_query($conn,$query);
        $adminInfo = mysqli_fetch_object($result);

        // echo "<pre>";

        // print_r($adminInfo);
    }

?>
<header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">UMS <span class="lite">Admin</span></a>
      <!--logo end-->


      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <assets/img alt="" src="assets/img/avatar1_small.jpg">
                            </span>
                            <span class="username">
                                <?php 
                                    

                                    if (isset($adminInfo->name)) {
                                        echo $adminInfo->name;
                                    }
                                ?>
                            </span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
            
              <li>
                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>