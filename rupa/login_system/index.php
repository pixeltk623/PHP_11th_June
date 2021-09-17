<?php       
include_once 'config.php';
    if (isset($_POST['submit'])) {
        
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $query = "SELECT * FROM users WHERE username = '$username'";
      
      $result = mysqli_query($conn, $query);

      if ($result->num_rows>0) {
          
          $queryCp = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
          $resultCp = mysqli_query($conn, $queryCp);

          if($resultCp->num_rows>0) {
            header("Location: dashboard.php");
          } else {
            
            $message =  "<h5 style='color: red; text-align: center;'>Password is Wrong</h5>";
          }

        } else {
            $message =  "<h5 style='color: red; text-align: center;'>Username is InValid</h5>";
        }

    }
?>
<style type="text/css">
  body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 0px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <?php 
                                if (isset($message)) {
                                    echo $message;
                                }
                            ?>
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username Or Email:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="register.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
