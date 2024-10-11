<!DOCTYPE html>
<html lang="en" data-textdirection="RTL" class="loading">

<head>
    <script>
    var base_url = '<?php echo base_url() ?>';
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Mens Closet Admin</title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url(); ?>favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin_content/robust-assets/css/vendors.min.css" />
    <!-- BEGIN VENDOR CSS-->
    <!-- BEGIN Font icons-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>admin_content/robust-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>admin_content/robust-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <!-- END Font icons-->
    <!-- BEGIN Plugins CSS-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>admin_content/robust-assets/css/plugins/sliders/slick/slick.css">
    <!-- END Plugins CSS-->

    <!-- BEGIN Vendor CSS-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>admin_content/robust-assets/css/plugins/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>admin_content/robust-assets/css/plugins/charts/morris.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>admin_content/robust-assets/css/plugins/extensions/unslider.css">
    <!-- END Vendor CSS-->

    <!-- BEGIN Vendor CSS-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>admin_content/robust-assets/css/plugins/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>admin_content/robust-assets/css/plugins/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>admin_content/robust-assets/css/plugins/forms/toggle/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>admin_content/robust-assets/css/plugins/forms/toggle/switchery.min.css">
    <!-- END Vendor CSS-->
    <!-- BEGIN Vendor CSS-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>admin_content/robust-assets/css/plugins/tables/datatable/dataTables.bootstrap4.min.css">
    <!-- END Vendor CSS-->

    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin_content/robust-assets/css/app.min.css" />
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>admin_content/robust-assets/css/components/weather-icons/climacons.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_content/assets/css/style.css">
    <!-- END Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_content/assets/css/style-rtl.css">
</head>

<body data-open="hover" data-menu="vertical-mmenu" data-col="2-columns"
    class="vertical-layout vertical-mmenu 2-columns  fixed-navbar">
    <!-- START PRELOADER-->

    <div id="preloader-wrapper">
        <div id="loader" class="square-spin loader-white">
            <div></div>
        </div>
        <div class="loader-section section-top bg-success"></div>
        <div class="loader-section section-bottom bg-success"></div>
    </div>

    <!-- END PRELOADER-->

    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-dark navbar-shadow navbar-border">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs"><i
                                class="icon-menu5 font-large-1"></i></a></li>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>admin" class="navbar-brand nav-link">
                            <img alt="branding logo" src="<?php echo base_url(); ?>user_content/img/logo/logo-13.png"
                                data-expand="<?php echo base_url(); ?>user_content/img/logo/logo-13.png"
                                data-collapse="<?php echo base_url(); ?>user_content/img/logo/logo-13.png"
                                class="brand-logo"></a></li>
                    <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse"
                            data-target="#navbar-mobile" class="nav-link open-navbar-container"><i
                                class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content container-fluid">
                <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                    <ul class="nav navbar-nav">
                        <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i
                                    class="icon-menu5"></i></a></li>

                    </ul>
                    <ul class="nav navbar-nav float-xs-right">
                        <?php $order_notification_data = $this->order_product_model->order_readwise_list(0);?>
                        <li class="dropdown dropdown-notification nav-item">
                            <a href="#" data-toggle="dropdown" class="nav-link nav-link-label">
                                <i class="ficon icon-bell4"></i>
                                <span
                                    class="tag tag-pill tag-default tag-danger tag-default tag-up"><?php echo count($order_notification_data);?></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0">
                                        <span class="grey darken-2">Orders</span>
                                        <span class="notification-tag tag tag-default tag-danger float-xs-right m-0">
                                            <?php echo count($order_notification_data);?> New
                                        </span>
                                    </h6>
                                </li>
                                <li class="list-group scrollable-container">
                                    <?php foreach($order_notification_data as $row){?>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left valign-middle">
                                                <i class="icon-cart3 icon-bg-circle bg-cyan"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">You have new order!</h6>
                                                <p class="notification-text font-small-3 text-muted">
                                                    <?php echo $row->u_name;?>
                                                </p>
                                                <small>
                                                    <time class="media-meta text-muted">
                                                        <?php
                                                        $diff = date_diff(date_create(date("y-m-d h:i:s")), date_create($row->added_on));

                                                            if ($diff->y > 0) {
                                                                echo $diff->y . " Year(s) Ago";
                                                            } else {
                                                                if ($diff->m > 0) {
                                                                    echo $diff->m . " Month(s) Ago";
                                                                } else {
                                                                    if ($diff->d > 0) {
                                                                        echo $diff->d . " Days(s) Ago";
                                                                    } else {
                                                                        echo "Today";
                                                                    }

                                                                }
                                                            }
                                                            ?>
                                                    </time>
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                    <?php }?>
                                </li>
                                <li class="dropdown-menu-footer"><a href="<?php echo base_url(); ?>Admin/show_order"
                                        class="dropdown-item text-muted text-xs-center">Read all Orders</a></li>
                            </ul>
                        </li>

                        <?php $contact_notification_data = $this->contact_model->contact_readwise_list(0);?>
                        <li class="dropdown dropdown-notification nav-item">
                            <??>
                            <a href="#" data-toggle="dropdown" class="nav-link nav-link-label">
                                <i class="ficon icon-mail6"></i>
                                <span
                                    class="tag tag-pill tag-default tag-info tag-default tag-up"><?php echo count($contact_notification_data); ?></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span>
                                        <span class="notification-tag tag tag-default tag-info float-xs-right m-0">
                                            <?php echo count($contact_notification_data); ?> New
                                        </span>
                                    </h6>
                                </li>
                                <li class="list-group scrollable-container">
                                    <?php foreach ($contact_notification_data as $row) {?>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <span class="avatar avatar-sm avatar-online rounded-circle">
                                                    <img src="<?php echo base_url(); ?>admin_content/robust-assets/images/portrait/small/avatar-s-1.png"
                                                        alt="avatar"><i></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><?php echo $row->name; ?></h6>
                                                <p class="notification-text font-small-3 text-muted">
                                                    <?php echo $row->title; ?></p>
                                                <small>
                                                    <time class="media-meta text-muted">
                                                        <?php
                                                        $diff = date_diff(date_create(date("y-m-d h:i:s")), date_create($row->added_on));

                                                            if ($diff->y > 0) {
                                                                echo $diff->y . " Year(s) Ago";
                                                            } else {
                                                                if ($diff->m > 0) {
                                                                    echo $diff->m . " Month(s) Ago";
                                                                } else {
                                                                    if ($diff->d > 0) {
                                                                        echo $diff->d . " Days(s) Ago";
                                                                    } else {
                                                                        echo "Today";
                                                                    }

                                                                }
                                                            }
                                                            ?>
                                                    </time>
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                    <?php }?>
                                </li>
                                <li class="dropdown-menu-footer"><a href="<?php echo base_url(); ?>Admin/show_contact"
                                        class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                                <span class="avatar avatar-online">
                                    <img src="<?php echo base_url(); ?>admin_content/robust-assets/images/portrait/small/avatar-s-1.png"
                                        alt="avatar">
                                    <i></i>
                                </span>
                                <span
                                    class="user-name"><?php if (isset($_SESSION['user_name'])) {echo $_SESSION['user_name'];}?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="<?php echo base_url(); ?>admin/logout" class="dropdown-item"><i
                                        class="icon-power3"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="fullscreen-search-overlay"></div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div class="main-menu menu-dark menu-fixed menu-shadow menu-border menu-accordion">
        <!-- main menu header-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="main-menu-content">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

                <li class=" nav-item">
                    <a href="<?php echo base_url(); ?>Admin">
                        <i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title"> Order</span>
                    </a>
                    <ul class="menu-content">

                        <li><a href="<?php echo base_url(); ?>Admin/show_order" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Show Order</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>Admin/show_delivered_order" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Delivered Order</a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item">
                    <a href="<?php echo base_url(); ?>Admin">
                        <i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title"> Inquiry</span>
                    </a>
                    <ul class="menu-content">

                        <li><a href="<?php echo base_url(); ?>Admin/show_contact" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Show Inquiry</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item">
                    <a href="<?php echo base_url(); ?>Admin">
                        <i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title"> Size</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/add_size" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Add Size</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>Admin/show_size" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Show Size</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item">
                    <a href="<?php echo base_url(); ?>Admin">
                        <i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title"> Colour</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/add_colour" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Add colour</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>Admin/show_colour" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Show colour</a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item">
                    <a href="<?php echo base_url(); ?>Admin">
                        <i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title"> Extra
                            Charge</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/add_extra_charge" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Add Extra Charge</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>Admin/show_extra_charge" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Show Extra Charge</a>
                        </li>
                    </ul>
                </li>


                <li class=" nav-item">
                    <a href="<?php echo base_url(); ?>Admin">
                        <i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title"> Coupon</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/add_coupon" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Add Coupon</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>Admin/show_coupon" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Show Coupon</a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item">
                    <a href="<?php echo base_url(); ?>Admin">
                        <i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title"> Product
                            Master</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/add_product_master" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Add Product Master</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>Admin/show_product_master" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Show Product Master</a>

                        </li>
                    </ul>
                </li>

                <li class=" nav-item">
                    <a href="<?php echo base_url(); ?>Admin">
                        <i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title"> Material</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/add_material" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Add Material</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>Admin/show_material" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Show Material</a>

                        </li>
                    </ul>
                </li>


                <li class=" nav-item">
                    <a href="<?php echo base_url(); ?>Admin">
                        <i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title"> Product
                            Type</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/add_product_type" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Add Product Type</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>Admin/show_product_type" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Show Product Type</a>

                        </li>
                    </ul>
                </li>

                <li class=" nav-item">
                    <a href="<?php echo base_url(); ?>Admin">
                        <i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title"> Sale</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/add_sale" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Add Sale</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>Admin/show_sale" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Show Sale</a>

                        </li>
                    </ul>
                </li>

                <li class=" nav-item">
                    <a href="<?php echo base_url(); ?>Admin">
                        <i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title"> Sale
                            Category</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/add_sale_category" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Add Sale Category</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>Admin/show_sale_category" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Show Sale Category</a>

                        </li>
                    </ul>
                </li>

                <li class=" nav-item">
                    <a href="<?php echo base_url(); ?>Admin">
                        <i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title"> Sale
                            Product</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/add_sale_product" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Add Sale Product</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>Admin/show_sale_product" data-i18n="nav.dash.ecommerce"
                                class="menu-item">Show Sale Product</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /main menu content-->
        <!-- main menu footer-->
        <div class="main-menu-footer footer-close">
            <div class="header text-xs-center"><a href="#" class="col-xs-12 footer-toggle"><i
                        class="icon-ios-arrow-up"></i></a></div>
            <div class="content">
                <div class="insights">
                    <div class="col-xs-12">
                        <p>Product Delivery</p>
                        <progress value="25" max="100" class="progress progress-xs progress-success">25%</progress>
                    </div>
                    <div class="col-xs-12">
                        <p>Targeted Sales</p>
                        <progress value="70" max="100" class="progress progress-xs progress-info">70%</progress>
                    </div>
                </div>
                <div class="actions"><a href="javascript: void(0);" data-placement="top" data-toggle="tooltip"
                        data-original-title="Settings"><span aria-hidden="true" class="icon-cog3"></span></a><a
                        href="javascript: void(0);" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lock"><span aria-hidden="true" class="icon-lock4"></span></a><a
                        href="javascript: void(0);" data-placement="top" data-toggle="tooltip"
                        data-original-title="Logout"><span aria-hidden="true" class="icon-power3"></span></a></div>
            </div>
        </div>
        <!-- main menu footer-->
    </div>
    <!-- / main menu-->