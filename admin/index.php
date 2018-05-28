<?php 
    session_start();
    if(isset($_SESSION['tdn'])){
    }
    else{
        header("location:login.php");

    }
    include("../lib_db.php");
?>
<!DOCTYPE html>
<html>


<!-- Mirrored from myadmin-html.axiomthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2016 09:03:47 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <base href=".">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Quản trị hệ thống</title>
      <link rel="shortcut icon" href="favicon.png">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/admin.css" rel="stylesheet">
      <link href="css/introjs.min.css" rel="stylesheet">
      <link href="css/jquery.dataTables.min.css" rel="stylesheet">
      
      <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/intro.min.js"></script>
      <script type="text/javascript" src="js/admin.js"></script>
      <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
      <!--Hỗ trợ IE nhận dạng thẻ HTML5-->
      <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
      <![endif]-->

</head>

<body >

    <!-- Header  -->
    <?php include("modules/header.php");?>
    <!-- /Header  -->
    <div class="clearfix">
        <!-- Sidebar  -->
        <?php include("modules/sidebar.php");?>
        <!-- /Sidebar -->
        <?php include("modules/content.php");?>
    </div>
                <!-- /Content -->
    <?php include("modules/footer.php");?>
</body>
</html>