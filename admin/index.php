<?php 
    session_start();
    if(isset($_SESSION['tdn'])){
    }
    else{
        header("location:login.php");

    }
    include("lib_db.php");
?>
<!DOCTYPE html>
<html>


<!-- Mirrored from myadmin-html.axiomthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2016 09:03:47 GMT -->
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>Quản lý đồng hồ</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="myAdmin - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/icomoon/icomoon.css">

    <!-- FullCalendar -->
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/magnific/magnific-popup.css">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/c3charts/c3.min.css">
    <link rel="stylesheet" type="text/css" href="assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- CSS - theme -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/less/theme.min.css">

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/style.css">
    

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- IE8 HTML5 support  -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page with-customizer">

<!-- Body Wrap  -->
    <div id="main">

        <!-- Header  -->
        <?php include("modules/header.php");?>
        <!-- /Header  -->

        <!-- Sidebar  -->
        <?php include("modules/sidebar.php");?>
        <!-- /Sidebar -->

        <!-- Main Wrapper -->
        <section id="content_wrapper">

               

                <!-- Content -->
                <?php include("modules/content.php");?>
                <!-- /Content -->

                <!-- Page Footer -->
               <?php include("modules/footer.php");?>