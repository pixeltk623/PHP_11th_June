<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Travel red bus Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo $baseurl;?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


      
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Bus details here</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-12 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">


  <form method="post" enctype="multipart/form-data">
 

 <div class="form-group">
     <label>Select Travel Agency:</label>

     <select name="trvagency" class="form-control">
         <option value="">-Select Travel Agency-</option>
           
         <?php
        foreach($shww as $shww1)
        {

         ?>

         <option value="<?php echo $shww1["catid"];?>"><?php echo $shww1["agencyname"];?></option>
    
         <?php

        }
        ?>
    
    
        </select>
 </div>


 <div class="form-group">
     <label>Select Bus images</label>
     <input type="file" name="img" class="form-control">
 </div>


 
 <div class="form-group">
    <label>Arrival Time</label>
    <input type="time" name="artime" class="form-control">
</div>



<div class="form-group">
    <label>Departure Time</label>
    <input type="time" name="detime" class="form-control">
</div>




<div class="form-group">
    <label>From:</label>

    <select name="frm" class="form-control">
        <option value="">-From-</option>
          
        <?php
       foreach($frm as $frm1)
       {

        ?>

        <option value="<?php echo $frm1["ctid"];?>"><?php echo $frm1["ctname"];?></option>
   
        <?php

       }
       ?>
   
   
       </select>
</div>






<div class="form-group">
    <label>To:</label>

    <select name="tto" class="form-control">
        <option value="">-To-</option>
          
        <?php
       foreach($frm as $frm1)
       {

        ?>

        <option value="<?php echo $frm1["ctid"];?>"><?php echo $frm1["ctname"];?></option>
   
        <?php

       }
       ?>
   
   
       </select>
</div>




<div class="form-group">
    <label>Rate </label>
    Rs.<input type="text" name="price" placeholder="Rate in Rupees INR" class="form-control">
</div>





<div class="form-group">
    <label>Total Number of Seat </label>
    <input type="text" name="seat" placeholder="Number of Seat e.g 95" class="form-control">
</div>




<div class="form-group">
    <label>Bus Coach </label>
    Sleeper <input type="radio" name="coach" value="sleeper">
    
    Sheater <input type="radio" name="coach" value="sheater">
</div>






<div class="form-group">
    
  <input type="submit" name="adbus" value="AddBus" class="btn btn-success btn-lg">


</div>









                  </div>
                </div>
              </div>
            </div>






          <!-- Content Row -->

         
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo $mainurl;?>Dashboard?logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo $baseurl;?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $baseurl;?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo $baseurl;?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo $baseurl;?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo $baseurl;?>vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo $baseurl;?>js/demo/chart-area-demo.js"></script>
  <script src="<?php echo $baseurl;?>js/demo/chart-pie-demo.js"></script>

</body>

</html>
