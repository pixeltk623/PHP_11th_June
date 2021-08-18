<?php 
		
	session_start();
	include_once '../database/database.php';

	if (isset($_POST['status'])) {
		$status = $_POST['status'];
		$user_id = $_POST['user_id'];
		if ($status==1) {
			$queryStatus = "UPDATE `users` SET `is_status`=0 WHERE id=".$user_id;
		} else {
			$queryStatus = "UPDATE `users` SET `is_status`=1 WHERE id=".$user_id;
		}
		mysqli_query($conn,$queryStatus);
	}

	if (isset($_POST['delete'])) {
		
		$user_id = $_POST['user_id'];

		$queryDelete = "DELETE FROM users WHERE id=".$user_id;
		mysqli_query($conn,$queryDelete);



	}

	if (!isset($_SESSION['is_admin_login']) && !isset($_SESSION['admin_id']) ) { 
			header("Location: index.php");
	} else {
		$query = "SELECT * FROM `users`";
		$result = mysqli_query($conn,$query);
		
		while ($response[] = mysqli_fetch_assoc($result)) {}

		$finalData = array_filter($response);

	// echo "<pre>";

	// print_r(sizeof($finalData));
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
								<h2><i class="fa fa-flag-o red"></i><strong>Registered Users</strong></h2>
								<div class="panel-actions">
									<a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
									<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
									<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
								</div>
							</div>
							<div class="panel-body">
								<table class="table bootstrap-datatable countries">
									<thead>
										<tr>
											<th>Sr.No</th>
											<th>Profile Pic</th>
											<th>Name</th>
											<th>Mobile</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

										<?php

											if (count($finalData)==0) {
											 	?>
											 		<tr>
											 			<td colspan="4" class="text-danger text-center">No Record Found</td>
											 		</tr>
											 	<?php 
											 }  else {


												foreach ($finalData as $key => $value) {
														?>
														<tr>
																<td><?php echo ++$key; ?></td>
																<td>
																		<img src="../uploads/<?php echo $value['profile_pic']; ?>" width="80">
																</td>
																<td><?php echo $value['full_name']; ?></td>
																<td><?php echo $value['mobile_no']; ?></td>
																<form method="post" class="form-inline">
																<td>
																		<a href="show_users.php?uid=<?php echo $value['id']; ?>" class="btn btn-primary">Show</a>

																		<a href="edit_users.php?uid=<?php echo $value['id']; ?>"  class="btn btn-warning">Edit</a>

																		<input type="hidden" name="user_id" value="<?php echo $value['id']; ?>">

																		<?php 

																				if ($value['is_status']==1) {
																						?>
																							<button type="submit" class="btn btn-success" name="status" value="<?php echo $value['is_status']; ?>">Active</button>
																						 
																						<?php 
																				} else {
																						?>
																						 <button type="submit" class="btn btn-info" name="status" value="<?php echo $value['is_status']; ?>">Deactive</button>
																						<?php 
																				}

																		?>
																		<button type="submit" class="btn btn-danger" name="delete">Delete</button>
																	
																</td>
														</tr>
															</form>
														<?php
												}
											}
										?>
										
									</tbody>
								</table>
							</div>

						</div>

					</div>


					<!--/col-->

				</div>


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
