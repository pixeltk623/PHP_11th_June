<?php
    
    include_once '../vendor/autoload.php';
    $conn = mysqli_connect("localhost","root","","php_11th_june");

   //  $attachment_location = "qr_code/1631093937.png";

   //  if (file_exists($attachment_location)) {

   //      header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
   //      header("Cache-Control: public"); // needed for internet explorer
   //      header('Content-Type: image/png');
   //      header("Content-Transfer-Encoding: Binary");
   //      header("Content-Length:".filesize($attachment_location));
   //      header("Content-Disposition: attachment; filename=qr_01.png");
   //      readfile($attachment_location);
   //      die();
   //  } else {
   //      die("Error: File not found.");
   //  }
   
   // die;
    // \PHPQRCode\QRcode::png("Test", "qr_code/qrcode.png", QR_ECLEVEL_L); 
    // generating
   // \PHPQRCode\QRcode::png($codeContents, $tempDir.'005_L.png', 'L', 4, 2);

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $fullMessage = "Email: " .$email."<br>"."Subject: ".$subject."<br>"."Message: ".$message;
        $qrImage = time().".png";

        $query = "INSERT INTO `qr`(`email`, `subject`, `message`, `full_message`, `qr_image`) VALUES ('$email', '$subject','$message','".$fullMessage."','$qrImage')";

        $result = mysqli_query($conn, $query);
        \PHPQRCode\QRcode::png($fullMessage, "qr_code/".$qrImage, 'L', 4, 2);
        if ($result) {
            echo "<script>alert('QR Code Generated');</script>";
        } else {
             echo "<script>alert('Error');</script>";
        }

        $qrImageLoad =  "<img src='qr_code/$qrImage' alt='qr' width='100%' height='290'>";

    }
    


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style type="text/css">
        .qr_code {
            width: 100%;
            height: 300px;
            border: 1px solid black;
            margin: auto;
        }
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">
        <h2 class="text-center">Quick Response (QR) Code Generator</h2>
        <div class="row">
            <div class="col-sm-6">
                <form method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea rows="9" class="form-control" name="message"></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-danger w-100">
                </form>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-8 offset-md-3">
                        <h3>QR Code Result:</h3>
                        <div class="qr_code">
                            <?php 
                                if (isset($qrImageLoad)) {
                                    echo $qrImageLoad;
                                } else {
                                    ?>
                                    <h4 class="text-center text-danger p-5">No Qr Code Generted</h4>
                                    <?php
                                }
                            ?>
                        </div>
                        <button type="button" class="btn btn-primary w-100 mt-2" <?php echo (isset($qrImageLoad)) ? '' : 'disabled' ?> >Download</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>