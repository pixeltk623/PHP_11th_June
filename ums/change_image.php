<?php 
  
    session_start();
    include_once 'database/database.php';
    date_default_timezone_set("Asia/Kolkata");

    if (isset($_POST['submit'])) {
       
       $profilePic = $_FILES['profilePic'];

       $ext = pathinfo($profilePic['name'], PATHINFO_EXTENSION);

        $newFileName = time().".".$ext;

        

        $query = "UPDATE `users` SET `profile_pic` = '$newFileName' WHERE id=".$_SESSION['user_id'];


        $result = mysqli_query($conn, $query);

        if ($result) {
          move_uploaded_file($profilePic['tmp_name'], "uploads/". $newFileName);
           
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
      
      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>Image</label>
          <img src="uploads/<?php echo $userDetails['profile_pic'] ?>" width=100><br><br>
          <input type="file" class="form-control-file" name="profilePic" required>
          <br>
          <input type="submit" name="submit" class="btn btn-primary">
        </div>
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
