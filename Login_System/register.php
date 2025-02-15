<?php 
    
    include_once 'config.php';

    // 1. Email 
    // 2. Username
    
    if (isset($_POST['submit'])) {
        
        $fullName = $_POST['full_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $queryCheckEmail = "SELECT * FROM users WHERE email = '$email'";

        $resultQ = mysqli_query($conn, $queryCheckEmail);

        if($resultQ->num_rows>0) {
            $errorEName =  "Email is Alreday Exits";
        } else {
            $error1 = true;
        }

        $queryCheckUserName = "SELECT * FROM users WHERE username = '$username'";

        $resultU = mysqli_query($conn, $queryCheckUserName);

        if($resultU->num_rows>0) {
            $errorUName =   "Username is Alreday Exits";
        } else {
            $error2 = true;
        }

        if (isset($error1) && isset($error2)) {
           $query = "INSERT INTO users (`full_name`, `username`, `email`, `password`) VALUES ('$fullName ', '$username', '$email', '$password')";

           $result = mysqli_query($conn, $query);

           if ($result) {
               
               $message = "<h5 style='color: green; text-align: center;'>Registration Done</h5>";

            } else {

                $message = "<h5 style='color: red; text-align: center;'>Something Error</h5>";

           } 
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
  height: 500px;
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
                        <form id="login-form" class="form" method="post">
                            <?php 
                                if (isset($message)) {
                                    echo $message;
                                }
                            ?>
                            <h3 class="text-center text-info">User Registration</h3>

                            <div class="form-group">
                                <label for="username" class="text-info">Full Name:</label><br>
                                <input type="text" name="full_name" id="full_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                                <?php 
                                    if (isset($errorUName)) {
                                        ?>
                                        <span style="color: red;"><?php echo $errorUName; ?></span>
                                        <?php 
                                    }
                                ?>
                            </div>

                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control" required>
                                <?php 
                                    if (isset($errorEName)) {
                                        ?>
                                        <span style="color: red;"><?php echo $errorEName; ?></span>
                                        <?php 
                                    }
                                ?>
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
                                <a href="index.php" class="text-info">Login here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
