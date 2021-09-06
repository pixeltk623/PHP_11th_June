<?php
$mainurl="http://localhost/php/mvc/admin/";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome-Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?php echo $mainurl;?>assets/CSS/style.css" rel="stylesheet">


    
    <link href="<?php echo $mainurl;?>assets/CSS/font-awesome.min.css" rel="stylesheet">

    <!-- java script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0">
        <a class="col-md-3 d-none d-md-block navbar-brand" href="#">Admin Panel</a>

        <a class="col-md-5" href="#" style="color:black; font-size:18px">Welcome : <?php echo ucfirst($_SESSION["em"]);?></a>


        <ul class="navbar-nav px-3">


            <li class="nav-item text-nowrap">
                <a class="nav-link btn btn-sm btn-danger" href="<?php echo $mainurl;?>?logout" onclick="return confirm('Are You sure to Logout as Customer ?')" style="color:white; margint-left:2%"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="fa fa-power-off"></span> Sign out</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo $mainurl;?>home">
                                <span class="iconify" data-icon="oi-home" data-inline="false"></span>&nbspHome
                                <!-- <span class="sr-only">(current)</span> -->
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $mainurl;?>home">
                                <span class="iconify" data-icon="oi-list-rich" data-inline="false"></span>&nbspDashBoard
                                <!-- <span class="sr-only">(current)</span> -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $mainurl;?>ManageCustomer">
                                <span class="iconify" data-icon="oi-list-rich" data-inline="false"></span>&nbspManageCustomer
                                <!-- <span class="sr-only">(current)</span> -->
                            </a>
                        </li>


                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $mainurl;?>AddCategory">
                                <span class="iconify" data-icon="oi-list-rich" data-inline="false"></span>&nbspAddCategory

                                <!-- <span class="sr-only">(current)</span> -->
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $mainurl;?>addsubcategory">
                                <span class="iconify" data-icon="oi-list-rich" data-inline="false"></span>&nbspAddSubCategory

                                <!-- <span class="sr-only">(current)</span> -->
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $mainurl;?>AddProducts">
                                <span class="iconify" data-icon="oi-list-rich" data-inline="false"></span>&nbspAddProducts

                                <!-- <span class="sr-only">(current)</span> -->
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $mainurl;?>ManageFeedback">
                                <span class="iconify" data-icon="oi-list-rich" data-inline="false"></span>&nbspManageFeedback

                                <!-- <span class="sr-only">(current)</span> -->
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $mainurl;?>ManageContact">
                                <span class="iconify" data-icon="oi-list-rich" data-inline="false"></span>&nbspManageContact

                                <!-- <span class="sr-only">(current)</span> -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $mainurl;?>ManageOrders">
                                <span class="iconify" data-icon="oi-list-rich" data-inline="false"></span>&nbspManageOrders

                                <!-- <span class="sr-only">(current)</span> -->
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $mainurl;?>ManageReviews">
                                <span class="iconify" data-icon="oi-list-rich" data-inline="false"></span>&nbspManageReviews

                                <!-- <span class="sr-only">(current)</span> -->
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

    
    