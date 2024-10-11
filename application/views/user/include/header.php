<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.devitems.com/t90-v2/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 08:55:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mens Closet</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo base_url(); ?>favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo base_url(); ?>favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!-- All CSS Hear -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>user_content/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>user_content/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>user_content/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>user_content/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>user_content/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>user_content/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>user_content/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>user_content/css/mainmenu.css">
    <!-- Style CSS Hear -->
    <link rel="stylesheet" href="<?php echo base_url();?>user_content/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>user_content/css/responsive.css">
    <script src="<?php echo base_url(); ?>user_content/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks</p>
        <![endif]-->
    <!-- Add your application content here -->

    <div class="wrapper home-5">
        <header>
            <!-- header-top-area start -->
            <div id="stickymenu" class="header-container-area bg-black solidblockmenu">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header-inner clearfix">
                                <div class="container-inner">
                                    <!-- logo-container start -->
                                    <div class="logo-container">
                                        <div class="logo">
                                            <a href="<?php echo base_url();?>"><img
                                                    src="<?php echo base_url(); ?>user_content/img/logo/logo-13.png"
                                                    style="height:25px;"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <!-- logo-container end -->
                                    <!-- main-menu-area start -->
                                    <div class="horizontal-menu main-menu-area menu-style-2 d-none d-lg-block">
                                        <nav>
                                            <ul>
                                                <li class="mega_parent float-left"><a
                                                        href="<?php echo base_url(); ?>user/index">Home</a>
                                                </li>
                                                <li class="mega_parent float-left"><a>Categories <i
                                                            class="icon-arrow-down"></i></a>
                                                    <ul class="mega-menu">
                                                        <?php if($product_type != null){ 
                                                                    foreach($product_type as $row){
                                                                ?>
                                                        <li><a
                                                                href="<?php echo base_url(); ?>user/product_list/<?php echo $row->pt_id_pk;?>"><?php echo $row->pt_name;?></a>
                                                        </li>
                                                        <?php } }?>
                                                    </ul>
                                                </li>
                                                
                                                <li><a href="<?php echo base_url(); ?>user/about_us">About us</a></li>
                                                <li><a href="<?php echo base_url(); ?>user/contact">Contact us</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- main-menu-area end -->
                                    <!-- box-right start -->
                                    <div class="box-right box-style-2">


                                        <!-- search-box-area start -->
                                        <div class="search-box-area">
                                            <span class="sidebar-trigger-search"><i
                                                    class="icon-magnifier icons"></i></span>
                                        </div>
                                        <!-- search-box-area end -->
                                        <!-- box-setting start -->
                                        <div class="box-setting">
                                            <div class="btn-group">
                                                <button class="settings-box-inner dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-settings icons"></i>
                                                </button>
                                                <div class="dropdown-menu setting-content">
                                                    <div class="account">
                                                        <button class="setting-btn">My Account <i
                                                                class="icon-arrow-down"></i></button>
                                                        <ul class="setting-list">
                                                            <li>
                                                                <?php if(isset($_SESSION['u_id'])){?>
                                                                <a href="<?php echo base_url(); ?>user/my_account/<?php echo $_SESSION['u_id'];?>"><?php echo $_SESSION['u_name'];?></a>
                                                                <a href="<?php echo base_url(); ?>user/logout/">Logout</a>
                                                                <?php }else{ ?>
                                                                    <a href="<?php echo base_url(); ?>user/login_register">Register/Login</a>
                                                                <?php } ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-setting end -->
                                        <!-- top-shopoing-cart start -->
                                        <div id="top-shopoing-cart" class="btn-group">
                                            <a class="shopping-cart dropdown-toggle" 
                                                aria-haspopup="true" aria-expanded="false" href="<?php echo base_url(); ?>user/view_cart">
                                                <i class="icon-basket-loaded icons"></i>
                                                <span class="top-cart-total">
                                                    <span class="item-text-number">
                                                    <?php if(isset($_SESSION['cart_id'])){
                                                        $id = $_SESSION['cart_id'];
                                                        $querry = $this->db->get_where('cart_product_master',array('cart_id_fk'=>$id));
                                                        echo count($querry->result());
                                                        }?>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <!-- top-shopoing-cart end -->
                                    </div>
                                    <!-- box-right end -->
                                </div>
                                <!-- mobile-menu-area start-->
                                <div class="mobile-menu-area d-block d-lg-none">
                                    <div class="mobile-menu">
                                        <nav id="mobile-menu-active">
                                            <ul>
                                                <li><a href="about.html">About us</a></li>
                                                <li><a href="contact.html">Contact us</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- mobile-menu-area end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top-area end -->