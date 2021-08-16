<?php 
  
    session_start();
    include_once 'database/database.php';
    date_default_timezone_set("Asia/Kolkata");

    if (isset($_POST['Update'])) {
       
        $fullName = $_POST['name'];
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['Address'];
        $city = $_POST['city'];

        if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
        } else {
        $gender = "";
        }

        if (isset($_POST['hobby'])) {
        $hobby = $_POST['hobby'];
        $hobby =  implode(",", $hobby);

        } else {
        $hobby = "";
        }
        $dob = $_POST['dob'];


        $currentTime = date("Y-m-d H:i:s");



        $query = "UPDATE `users` SET `full_name`='$fullName',  `username`='$uname',  `email`='$email',  `gender`='$gender',  `hobby`='$hobby',  `city`='$city',  `dob`='$dob',  `mobile_no`='$mobile',  `address`='$address', `updated_at` = '$currentTime' WHERE id=".$_SESSION['user_id'];


        $result = mysqli_query($conn, $query);

        if ($result) {

           
            $message = "<h2 style='text-align: center; color: green;'>Updated</h2>";
 
        } else {
            $message = "<h2 style='text-align: center; color: red;'>Something Error</h2>";
        }       
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 1800px;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

    <?php 
        if (isset($_SESSION['user_id']) && isset($_SESSION['is_login'])) {

            $queryProfile = "SELECT * FROM users WHERE id= ".$_SESSION['user_id'];
            $resultProfile = mysqli_query($conn, $queryProfile);

            $userDetails = mysqli_fetch_assoc($resultProfile);

            $arrayHobby = explode(",", $userDetails['hobby']);
            // echo "<pre>";
            // print_r($arrayHobby);
            // print_r($userDetails);


        ?>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> <?php echo $userDetails['full_name']; ?> (My Profile) <img src="uploads/<?php echo $userDetails['profile_pic'] ?>" width="20" style="border-radius: 50%;"></a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
        <?php
        } else {
            ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            <?php
        } 
    ?>

     
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome <?php echo $userDetails['full_name'] ?></h1>
      <?php 
        if (isset($message)) {
            echo $message;
        }
      ?>
      <form method="post">
          <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="name" value="<?php echo $userDetails['full_name'] ?>">
          </div>

          <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username" value="<?php echo $userDetails['username'] ?>">
          </div>

          <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" name="email" value="<?php echo $userDetails['email'] ?>">
          </div>

          <div class="form-group">
              <label>Gender</label>
             
                <input type="radio" class="form-control-check" name="gender" value="Male" <?php
                    if ($userDetails['gender']=='Male') {
                    echo "checked";
                    }
                 ?>> Male
                <input type="radio" class="form-control-check" name="gender" value="Female" <?php
                    if ($userDetails['gender']=='Female') {
                    echo "checked";
                    }
                 ?>> Female
          </div>

          <div class="form-group">
                    <label>Hobby</label>
                    <input type="checkbox" class="form-control-check" name="hobby[]" value="Cricket"
                    <?php if (in_array("Cricket", $arrayHobby)) {
                       echo "checked";
                    } ?>
                    > Cricket
                    <input type="checkbox" class="form-control-check" name="hobby[]" value="Football" <?php if (in_array("Football", $arrayHobby)) {
                       echo "checked";
                    } ?>> Football
                    <input type="checkbox" class="form-control-check" name="hobby[]" value="Tenis" <?php if (in_array("Tenis", $arrayHobby)) {
                       echo "checked";
                    } ?>> Tenis
                    <input type="checkbox" class="form-control-check" name="hobby[]" value="Baseball" <?php if (in_array("Baseball", $arrayHobby)) {
                       echo "checked";
                    } ?>> Baseball
          </div>


          <div class="form-group">
              <label>City</label>
              
                    <select name="city" class="form-control">
                        <option value="" <?php echo ($userDetails['city']=='') ? 'selected' : '' ?>>select</option>
                        <option value="Vadodara"  <?php echo ($userDetails['city']=='Vadodara') ? 'selected' : '' ?>>Vadodara</option>
                        <option value="Darjeeling" <?php echo ($userDetails['city']=='Darjeeling') ? 'selected' : '' ?>>Darjeeling</option>
                        <option value="Bhavnagar" <?php echo ($userDetails['city']=='Bhavnagar') ? 'selected' : '' ?>>Bhavnagar</option>
                        <option value="Anand" <?php echo ($userDetails['city']=='Anand') ? 'selected' : '' ?>>Anand</option>
                    </select>
          </div>


          <div class="form-group">
              <label>DOB</label>
              <input type="date" class="form-control" name="dob" value="<?php echo $userDetails['dob'] ?>">
          </div>


          <div class="form-group">
              <label>Mobile</label>
              <input type="text" class="form-control" name="mobile" value="<?php echo $userDetails['mobile_no'] ?>">
          </div>
          <div class="form-group">
              <label>Address</label>
              <textarea name="Address" class="form-control"><?php echo $userDetails['address']; ?></textarea>
          </div>

          <div class="form-group">
              <label>Profile Pic</label>
              <img src="uploads/<?php echo $userDetails['profile_pic'] ?>" width=100>

              <a href="change_image.php">Change Image</a>
          </div>

          <div class="form-group">
              <label>Create Date</label>
              <input type="datetime" class="form-control" name="" value="<?php echo $userDetails['created_at']; ?>" disabled>
          </div>

          <div class="form-group">
              <label>Update Date</label>
              <input type="datetime" class="form-control" name="" value="<?php echo $userDetails['updated_at']; ?>" disabled>
          </div>
          <input type="submit" name="Update" value="Update" class="btn btn-primary">
      </form>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
