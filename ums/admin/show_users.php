<?php 
    session_start();
    include_once '../database/database.php';
    if (!isset($_SESSION['is_admin_login']) && !isset($_SESSION['admin_id'])) {
        
        header("Location: index.php");
    }


    if (isset($_GET['uid'])) {
    	$userId = $_GET['uid'];

    	$query = "SELECT * FROM `users` WHERE id=".$userId;
		$result = mysqli_query($conn,$query);

		$dataSet = mysqli_fetch_object($result);

		// echo "<pre>";

		// print_r($dataSet);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="assets/img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link href="assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="assets/css/fullcalendar.css">
  <link href="assets/css/widgets.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet" />
  <link href="assets/css/xcharts.min.css" rel=" stylesheet">
  <link href="assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <?php 

        include_once 'includes/header.php';
        include_once 'includes/aside.php';

    ?>
   

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>
         <div class="row">

          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Registered Users <span style="color: blue;">(<?php echo $dataSet->full_name; ?>)</span></strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">
        		<table class="table table-bordered">
        			<tr>
        				<th>Name</th>
        				<td><?php echo $dataSet->full_name; ?></td>
        			</tr>
        			<tr>
        				<th>Username</th>
        				<td><?php echo $dataSet->username; ?></td>
        			</tr>
        			<tr>
        				<th>Email</th>
        				<td><?php echo $dataSet->email; ?></td>
        			</tr>
        			<tr>
        				<th>Password</th>
        				<td style="opacity: 0.3; text-decoration: line-through;"><?php echo $dataSet->password; ?></td>
        			</tr>
        			<tr>
        				<th>Gender</th>
        				<td><?php echo $dataSet->gender; ?></td>
        			</tr>
        			<tr>
        				<th>Hobby</th>
        				<td><?php echo $dataSet->hobby; ?></td>
        			</tr>
        			<tr>
        				<th>City</th>
        				<td><?php echo $dataSet->city; ?></td>
        			</tr>
        			<tr>
        				<th>DOB</th>
        				<td><?php echo $dataSet->dob; ?></td>
        			</tr>
        			<tr>
        				<th>Profile Pic</th>
        				<td>
        					<img src="../uploads/<?php echo $dataSet->profile_pic; ?>" width="100">
        				</td>
        			</tr>
        			<tr>
        				<th>Mobile No</th>
        				<td><?php echo $dataSet->mobile_no; ?></td>
        			</tr>
        			<tr>
        				<th>Address</th>
        				<td><?php echo $dataSet->address; ?></td>
        			</tr>
        			<tr>
        				<th>Status</th>
        				<td><?php echo ($dataSet->is_status==1) ? '<span style="color:green;">Active</span>' : '<span style="color: red;">Deactive</span>'; ?></td>
        			</tr>
        			<tr>
        				<th>Created Date</th>
        				<td><?php echo date("Y-m-d", strtotime($dataSet->created_at)); ?></td>
        			</tr>
        			<tr>
        				<th>Updated Date</th>
        				<td><?php echo date("Y-m-d", strtotime($dataSet->updated_at)); ?></td>
        			</tr>
        			<tr>
        				<th colspan="2">
        					<a href="manage_users.php" class="btn btn-primary">Back To Home</a>
        				</th>
        				
        			</tr>

        		</table>
              </div>

            </div>

          </div>
          <!--/col-->
        
 
          <!--/col-->

          <!--/col-->

        </div>
        
        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery-ui-1.10.4.min.js"></script>
  <script src="assets/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="assets/js/jquery.scrollTo.min.js"></script>
  <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="assets/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="assets/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="assets/js/calendar-custom.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="assets/js/jquery.customSelect.min.js"></script>
    <script src="assets/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="assets/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
    <script src="assets/js/easy-pie-chart.js"></script>
    <script src="assets/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/js/xcharts.min.js"></script>
    <script src="assets/js/jquery.autosize.min.js"></script>
    <script src="assets/js/jquery.placeholder.min.js"></script>
    <script src="assets/js/gdp-data.js"></script>
    <script src="assets/js/morris.min.js"></script>
    <script src="assets/js/sparklines.js"></script>
    <script src="assets/js/charts.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
