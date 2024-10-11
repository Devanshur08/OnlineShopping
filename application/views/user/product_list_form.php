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

<!-- breadcrumb-area start -->
<div class="breadcrumb-area ptb-30 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>user/index">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- main-content-wrap start -->
<div class="main-content-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <!-- filter-wrapper start -->
                <div class="filter-wrapper pt-100">
                <h4 class="filter-title">Filter</h4>
                    
                    <!-- filter-wrap start -->
                    <div class="filter-wrap mb-30">
                        <h4 class="filter-title">Color</h4>
                        <div class="list_group_item">
                            <ul>
                                <li><a href="#">Black (4)</a></li>
                                <li><a href="#">Blue (6)</a></li>
                                <li><a href="#">Brown (7)</a></li>
                                <li><a href="#">White (3)</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- filter-wrap end -->
                    <!-- filter-wrap start -->
                    <div class="filter-wrap mb-30">
                        <h4 class="filter-title">Offer</h4>
                        <div class="list_group_item">
                            <ul>
                                <li><a href="#">Black (4)</a></li>
                                <li><a href="#">Blue (6)</a></li>
                                <li><a href="#">Brown (7)</a></li>
                                <li><a href="#">White (3)</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- filter-wrap end -->
                </div>
                <!-- filter-wrapper end -->
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="shop-top-bar pt-100">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <!-- shop-item-filter-list start -->
                            <ul role="tablist" class="nav shop-item-filter-list">
                                <li role="presentation" class="active"><a href="#grid-view" aria-controls="grid-view"
                                        role="tab" data-toggle="tab" class="active show" aria-selected="true"><i
                                            class="fa fa-th"></i></a></li>
                                <li role="presentation"><a href="#list-view" aria-controls="list-view" role="tab"
                                        data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>
                        <div class="toolbar-amount">
                            <span>Showing 1 to 9 of 15</span>
                        </div>
                    </div>
                    <!-- product-select-box start -->
                    <div class="product-select-box">
                        <div class="product-short">
                            <label>Sort By: </label>
                            <select class="nice-select">
                                <option value="Relevance">Relevance</option>
                                <option value="Name">Price (Low > High)</option>
                                <option value="Name">Price (High > Low)</option>
                           
                                
                            </select>
                        </div>
                    </div>
                    <!-- product-select-box end -->
                </div>
                <!--  shop-products-wrapper strar -->
                <div class="shop-products-wrapper">
                    <!-- tab-content start -->
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="shop-product-area">
                                <div class="row">
                                    <?php if($product_master != null){ 
                                                                    foreach($product_master as $row){
                                                                ?>

                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <!-- single-product-area start -->
                                        <div class="single-product-area mt-30">
                                            <div class="product-thumb">
                                                <a
                                                    href="<?php echo base_url(); ?>user/single_product/<?php echo $row->p_id_pk;?>">
                                                    
                                                    <img class="primary-image"
                                                        src="<?php echo base_url().$row->pi_name; ?>"
                                                        alt="">
                                                   <?php 
                                                   $image_data = $this->product_image_model->find_product_image_data($row->p_id_pk);
                                                   foreach ($image_data as $row1){
                                                   ?>
                                                    <img class="secondary-image"
                                                        src="<?php echo base_url().$row1['pi_name']; ?>"
                                                        alt="">
                                                   <?php }?>
                                                </a>
                                                <div class="label-product label_new">New</div>
                                                <div class="action-links">
                                                    <a href="<?php echo base_url();?>user/add_to_wishlist/<?php echo $row->p_id_pk?>" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                   
                                                </div>
                                            </div>
                                            <div class="product-caption">
                                                <h4 class="product-name">
                                                <a href="<?php echo base_url(); ?>user/single_product/<?php echo $row->p_id_pk;?>">
                                                        <?php echo $row->p_name;?>
                                                    </a>
                                                </h4>
                                                <div class="price-box">
                                                    <span class="new-price">₹ <?php echo $row->price;?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-area end -->
                                    </div>
                                    <?php } }?>
                                </div>
                            </div>
                        </div>
                        <div id="list-view" class="tab-pane fade" role="tabpanel">
                            <div class="row">
                                <div class="col">

                                    <?php if($product_master != null){ 
                                                                    foreach($product_master as $row){
                                                                ?>

                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-thumb">

                                                <a href="<?php echo base_url(); ?>user/single_product/<?php echo $row->p_id_pk;?>">
                                                    <img class="primary-image"
                                                        src="<?php echo base_url().$row->pi_name; ?>"
                                                        alt="">
                                                   <?php 
                                                   $image_data = $this->product_image_model->find_product_image_data($row->p_id_pk);
                                                   foreach ($image_data as $row1){
                                                   ?>
                                                    <img class="secondary-image"
                                                        src="<?php echo base_url().$row1['pi_name']; ?>"
                                                        alt="">
                                                   <?php }?>
                                                </a>
                                                <div class="label-product label_new">New</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <div class="product-caption">
                                                <h4 class="product-name">
                                                <a href="<?php echo base_url(); ?>user/single_product/<?php echo $row->p_id_pk;?>">
                                                        <?php echo $row->p_name;?>
                                                    </a>
                                                </h4>
                                                <div class="price-box">
                                                    <span class="new-price">₹<?php echo $row->price;?></span>
                                                </div>
                                                <p class="product-des"><?php echo $row->description;?></p>
                                                <ul class="quick-add-to-cart">
                                                    
                                                    
                                                    <li><a href="<?php echo base_url();?>user/add_to_wishlist/<?php echo $row->p_id_pk?>" class="wishlist-btn"><i class="icon-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } }?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab-content end -->
                </div>
                <!--  shop-products-wrapper end -->
            </div>
        </div>
    </div>
</div>
<!-- main-content-wrap end -->
<br>
<br>
<br>

<?php include 'include/footer.php' ?>;