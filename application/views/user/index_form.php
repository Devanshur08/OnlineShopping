<?php include 'include/header.php' ?>



               <!-- main-search start -->
                <div class="main-search-active">
                    <div class="sidebar-search-icon">
                        <button class="search-close"><span class="icon-close"></span></button>
                    </div>
                    <div class="sidebar-search-input">
                        <form>
                            <div class="form-search">
                                <input id="search" class="input-text" value="" placeholder="Search entire store here ..." type="search">
                                <button class="search-btn" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- main-search start -->
                
                <!-- slider-main-area start -->
                <div class="slider-main-area">
                    <div class="slider-active owl-carousel">
                    <?php 
                    $sale_data = $this->sale_model->showsale_data();
                    foreach($sale_data as $row){
                    ?>
                        <div class="slider-wrapper" style="background-image:url(<?php echo base_url().$row->sale_image; ?>)">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-7">
                                        <div class="slider-text-info style-5 slider-text-animation">
                                            <div class="slier-logo">
                                                <img src="<?php echo base_url(); ?>user_content/img/logo/logo-13.png" alt="">
                                            </div>
                                            
                                            <h1 class="sub-title" >WELCOME TO<span> MENS CLOSET</span></h1>
                                            <div class="slider-1-des">
                                                <p>A NEW STORE FRONT</p>
                                            </div>
                                            <br/>
                                            <div class="slider-1-des">
                                                <p style="border:2px solid black;padding:10px;color:black;">Offer - <?php echo $row->sale_name;?></p>
                                            </div>
                                            <div class="slier-btn-1">
                                                <a title="shop now" href="<?php echo base_url();?>user/offer_product/<?php echo $row->sale_id_pk;?>" class="btn">shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <!-- slider-main-area start -->
            </header>
            
            <!-- welcome-area start -->
            <div class="welcome-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="wlc-setion-title text-center mt-100">
                                <h4>Hello world ! </h4>
                                <h2>Welcome to store</h2>
                                <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart themes and provide premium and dedicated support to our products.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- welcome-area end -->
            
            
            <!-- banner-area start -->
            <div class="banner-area bannar-full-area pt-100">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="banner_image_area">
                                <a href="#"><img src="<?php echo base_url(); ?>user_content/img/banner/13.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6 r-mt-30">
                            <div class="row no-gutters">
                                <div class="col-lg-6 col-md-6">
                                    <div class="banner_image_area">
                                        <a href="#"><img src="<?php echo base_url(); ?>user_content/img/banner/14.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 r-mt-30">
                                    <div class="single-banner-image banner-bg">
                                        <div class="banner-contend">
                                            <h4>clothing riviera dandies</h4>
                                            <p>Inspired by a lifestyle that beats for finer things, never settling for anything short of superb quality, effortless luxury </p>
                                            <a href="#" class="view-more"><i class="icon-control-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 r-mt-30">
                                        <div class="single-banner-image banner-bg">
                                            <div class="banner-contend text-right">
                                                <h4>New trending style </h4>
                                                <p>Inspired by a lifestyle that beats for finer things, never settling for anything short of superb quality, effortless luxury </p>
                                                <a href="#" class="view-more"><i class="icon-control-play"></i></a>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-6 col-md-6 r-mt-30">
                                    <div class="banner_image_area">
                                        <a href="#"><img src="<?php echo base_url(); ?>user_content/img/banner/15.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner-area end -->
            
            
            <!-- product-area start -->
            <div class="product-area ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section-title text-center mb-50">
                                <h4>our products</h4>
                                <h2>Best seller products </h2>
                                <div class="module-description">
                                    <p>Discover the best selling products of T90 stores. All the products are listed weekly in store, helping customers capture products are best sellers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
                        <?php if($new_product_arrival != null){
                            foreach($new_product_arrival as $row){?>
                            <div class="col-lg-3">
                                <!-- single-product-area start -->
                                <div class="single-product-area">
                                    <div class="product-thumb">
                                        <a href="<?php echo base_url(); ?>user/single_product/<?php echo $row->p_id_pk;?>">
                                            <img class="primary-image" src="<?php echo base_url().$row->pi_name; ?>" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="<?php echo base_url();?>user/add_to_wishlist/<?php echo $row->p_id_pk?>" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="<?php echo base_url(); ?>user/single_product/<?php echo $row->p_id_pk;?>"><?php echo $row->p_name;?></a></h4>
                                        <div class="price-box">
                                            <span class="new-price">₹ <?php echo $row->price;?></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <?php }
                        }?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-area end -->
            <br>
            <br>
            <br>
            
           <?php include 'include/footer.php' ?>