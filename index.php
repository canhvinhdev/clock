<?php 
    ob_start();
    session_start();
    include 'lib_db.php';   
    @$get=$_GET['page_layout'];
    $id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0; 
    $id_dm = isset($_REQUEST["id_dm"]) ? $_REQUEST["id_dm"] * 1 : ''; 
    $parent_id = isset($_REQUEST["parent_id"]) ? $_REQUEST["parent_id"] * 1 : ''; 
    $sql = "select * from sanpham where id= ".$id ;
    $data = select_one($sql);//var_dump($data); 
    ?>
<!DOCTYPE html>
<html class="no-js" lang="">
    
<!-- Mirrored from devitems.com/tf/dilima-preview/dilima/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2016 16:08:57 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Đồng hồ chính hãng</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> 
        
        
        <!-- Fonts  -->
        <link href='https://fonts.googleapis.com/css?family=Khula:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        <!-- style CSS
        ============================================ -->          
        <link rel="stylesheet" href="style.css">
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="home-2">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Start main area -->
        <div class="main-area">
            <!-- Start header -->
            <header>
                <!-- Start logo and search area -->
                <div class="logo-and-search-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="logo">
                                    <a href="index.html"><img src="images/lg1.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <!-- Start user info adn search -->
                                <?php if(isset($_SESSION["thanhvien"])){
                                        include('chucnang/header/header_member.php');
                                    }
                                    else
                                        include('chucnang/header/header.php');
                                ?>
                                <!-- End user info adn search -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End logo and search area -->
                <?php  include('chucnang/menu/menu.php'); ?>
            </header>
            <!-- End header -->
            <!-- Start slider area -->

                            <?php
                            switch(@$get){
                                case 'danhsachtimkiem': include_once('chucnang/timkiem/danhsachtimkiem.php');
                                break;
                                
                                case 'timkiemnangcao': include_once('chucnang/timkiem/danhsachtimkiemnangcao.php');
                                break;
                                
                                case 'dstintuc': include_once('chucnang/tintuc/tindanhsach.php');
                                break;
                                
                                case 'danhsach': include_once('chucnang/tintuc/danhsach.php');
                                break;

                                case 'huydonhang': include_once('chucnang/thanhvien/huydonhang.php');
                                break;
                                
                                case 'tinchitiet': include_once('chucnang/tintuc/tinchitiet.php');
                                break;
                                
                                case 'gioithieuchung': include_once('chucnang/gioithieuchung/gioithieuchung.php');
                                break;
                                
                                case 'khuyenmai': include_once('chucnang/khuyenmai/khuyenmai.php');
                                break;
                                case 'donghochon': include_once('chucnang/khuyenmai/donghochon.php');
                                break;
                                
                                case 'dangky': include_once('chucnang/thanhvien/dangky.php');
                                break;
                                
                                case 'dangkythanhcong': include_once('chucnang/thanhvien/dangkythanhcong.php');
                                break;
                                
                                case 'dangnhap': include_once('chucnang/thanhvien/dangnhap.php');
                                break;
                                
                                case 'lichsuchitiet': include_once('chucnang/thanhvien/lichsuchitiet.php');
                                break;
                                
                                case 'quanlytaikhoan': include_once('chucnang/thanhvien/quanlytaikhoan.php');
                                break;
                                
                                case 'khuyenmai': include_once('chucnang/thanhvien/khuyenmai.php');
                                break;
                                
                                case 'lichsumuahang': include_once('chucnang/thanhvien/lichsumuahang.php');
                                break;
                                
                                case 'dangxuat': include_once('chucnang/thanhvien/dangxuat.php');
                                break;
                                
                                case 'danhsachsp': include_once('chucnang/sanpham/danhsachsp.php');
                                break;

                                case 'danhsachsptl': include_once('chucnang/sanpham/danhsachsptl.php');
                                break;
                                case 'spyt': include_once('chucnang/sanpham/spyt.php');
                                break;
                                
                                
                                case 'chitietsp': include_once('chucnang/sanpham/chitietsp.php');
                                break;
                                
                                case '404notfound': include_once('chucnang/sanpham/404notfound.php');
                                break;
                                
                                case 'giohang': include_once('chucnang/giohang/giohang.php');
                                break;
                                
                                case 'muahang': include_once('chucnang/giohang/muahang.php');
                                break;
                                
                                case 'hoanthanh': include_once('chucnang/giohang/hoanthanh.php');
                                break;
                                
                                default: include_once('chucnang/sanpham/danhsach.php');  
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End categori area -->
            <!-- Start blog area -->
            <?php include_once('chucnang/tintuc/tintuctrangchu.php');   ?>
            <!-- End blog area -->
            <?php include_once('chucnang/footer/footer.php');   ?>