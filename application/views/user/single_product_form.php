<?php include 'include/header.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    console.log($('#size_id_fk').val());
    $("#btnSubmit").click(function() {
        var ddlFruits = $("#size_id_fk");
        if (ddlFruits.val() == "none") {
            //If the "Please Select" option is selected display error.
            alert("Please select an Size!");
            return false;
        }
        return true;
    });
});
</script>
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
                    <li class="breadcrumb-item"><a href=<?php echo base_url(); ?>>Home</a></li>
                    <li class="breadcrumb-item active"><?php echo $single_product->p_name; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- main-content-wrap start -->
<div class="main-content-wrap pt-100">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="sinlge-product-wrap">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-tab">
                                <div class="zoomWrapper">
                                    <div id="img-1" class="zoomWrapper single-zoom">
                                        <a href="#">
                                            <img id="zoom1" src="<?php echo base_url().$single_product->pi_name; ?>"
                                                data-zoom-image="<?php echo base_url().$single_product->pi_name; ?>"
                                                alt="big-1">
                                        </a>
                                    </div>
                                    <div class="single-zoom-thumb">
                                        <ul class="s-tab-zoom single-product-active owl-carousel" id="gallery_01">
                                            <?php 
                                                   $image_data = $this->product_image_model->find_product_image_data($single_product->p_id_pk);
                                                   $count = 1;
                                                   foreach ($image_data as $row1){
                                                       $count++;
                                                   ?>
                                            <li <?php if($count != '1'){echo 'class=""';}?>>
                                                <a href="#"
                                                    class="elevatezoom-gallery <?php if($count == '1'){echo 'active';}?>"
                                                    data-update=""
                                                    data-image="<?php echo base_url().$row1['pi_name']; ?>"
                                                    data-zoom-image="<?php echo base_url().$row1['pi_name']; ?>">
                                                    <img src="<?php echo base_url().$row1['pi_name']; ?>"
                                                        alt="zo-th-1" /></a>
                                            </li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- product-thumbnail-content start -->
                            <div class="quick-view-content">
                                <div class="product-info">
                                    <h2><?php echo $single_product->p_name; ?></h2>
                                    <div class="rating-box">
                                        <ul class="rating d-flex">
                                            <?php for($i=0;$i<$review_count;$i++) {?>
                                            <li><i class="icon-star"></i></li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                    <form method="post" name="myform" id="myform"
                                        action="<?php echo base_url(); ?>user/add_product_cart/<?php echo $single_product->p_id_pk;?>"
                                        novalidate>
                                        <div class="price-box">
                                            <span class="new-price">₹<?php echo $single_product->price;?></span>
                                            <input type="hidden" name="price"
                                                value="<?php echo  $single_product->price; ?>">
                                        </div>
                                        <ul class="list-unstyled">
                                            <li>Availability: <span class="stock">In Stock</span></li>
                                        </ul>
                                        <div class="available-color">
                                            <h3>Available Size</h3>
                                            <select name="size_id_fk" id="size_id_fk" class="color-list">
                                                <option value="none">Select Size</option>
                                                <?php 
                                                   
                                                   foreach ($size_data as $row){
                                                   ?>
                                                <option value="<?php echo $row->size_id_pk;?>">
                                                    <?php echo $row->size_name;?> </option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="modal-cart">


                                            <div class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input name="textquantity" type="number" value="1" min="0" step="1"
                                                        class="input-box">
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="quick-add-to-cart">
                                            <li><button type='submit' id="btnSubmit" class="add-to-cart "><i
                                                        class="icon-basket-loaded"></i> Add to cart</button></li>

                                            <li><a class="wishlist-btn"
                                                    href="<?php echo base_url();?>user/add_to_wishlist/<?php echo $single_product->p_id_pk;?>"><i
                                                        class="icon-heart"></i></a></li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!-- product-thumbnail-content end -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="product-info-detailed mt-100">
                                <div class="discription-tab-menu">
                                    <ul role="tablist" class="nav">
                                        <li class="active"><a href="#description" data-toggle="tab"
                                                class="active show">Description</a></li>
                                        <li><a href="#review" data-toggle="tab">Reviews
                                                (<?php echo count($review_data);?>)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="discription-content">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active show" id="description">
                                        <div class="description-content">
                                            <p><?php echo $single_product->description;?></p>
                                        </div>
                                    </div>
                                    <div id="review" class="tab-pane fade">
                                        <form class="form-review" method="post"
                                            action="<?php echo base_url();?>user/add_product_review/<?php echo $single_product->p_id_pk;?>">
                                            <div class="review">
                                                <table class="table table-striped table-bordered table-responsive">

                                                    <tbody>
                                                        <?php 
                                                    if($review_data != null){
                                                    foreach($review_data as $row){?>
                                                        <tr>
                                                            <td class="table-name">
                                                                <strong><?php echo $row->u_name;?></strong></td>
                                                            <td class="text-right"><?php 
                                                            $newDate = date("d-m-Y", strtotime($row->added_on));
                                                             echo $newDate;?></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <p><?php echo $row->description;?></p>
                                                                <ul>
                                                                    <?php for($i=0;$i<$row->rating;$i++) {?>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <?php }?>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <?php } }?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="review-wrap">
                                                <h2>Write a review</h2>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="control-label">Your Name</label>
                                                        <input type="text"
                                                            value="<?php if(isset($_SESSION['u_name'])){ echo $_SESSION['u_name'];}?>"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="control-label">Your Review</label>
                                                        <textarea name="description" class="form-control"></textarea>

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="control-label">Rating</label>
                                                        &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                        <input type="radio" value="1" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="2" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="3" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="4" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="5" name="rating">
                                                        &nbsp;Good
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="buttons clearfix">
                                                <div class="pul-right">
                                                    <button class="button-review" type="submit">Continue</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- main-content-wrap end -->
<br>
<br>
<br>
<?php include 'include/footer.php' ?>;