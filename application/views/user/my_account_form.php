<?php include 'include/header.php' ?>

<!-- mobile-menu-area start-->
<div class="mobile-menu-area d-block d-lg-none">
    <div class="mobile-menu">
        <nav id="mobile-menu-active">
            <ul>
                <li><a href="<?php base_url(); ?>user/shop">Special Offers</a></li>
                <li><a href="<?php base_url(); ?>user/about_us">About us</a></li>
                <li><a href="<?php base_url(); ?>user/contact">Contact us</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- mobile-menu-area end-->
</div>
<!-- header-top-area end -->
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
</header>

<!-- breadcrumb-area start -->
<div class="breadcrumb-area ptb-30 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Login &amp; Register</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- main-content-wrap start -->
<div class="main-content-wrap pt-100">
    <div class="container">
        <div class="account-dashboard">
            <div class="dashboard-upper-info">
                <div class="row align-items-center no-gutters">
                    <div class="col-lg-3 col-md-12">
                        <div class="d-single-info">
                            <p class="user-name">Hello <span><?php echo $user_data->u_name;?></span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="d-single-info">
                            <p>Need Assistance? Customer service at.</p>
                            <p>admin@devitems.com.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <div class="d-single-info text-lg-center">
                            <a class="view-cart" href="<?php echo base_url();?>user/view_cart"><i
                                    class="fa fa-cart-plus"></i>view cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-2">
                    <!-- Nav tabs -->
                    <ul class="nav flex-column dashboard-list" role="tablist">
                        <li><a class="nav-link" data-toggle="tab" href="#account-details">Account details</a></li>
                        <li> <a class="nav-link" data-toggle="tab" href="#orders">Orders</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#downloads">Wishlist</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#address">Addresses</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#change-password">Change Password</a></li>
                        <li><a class="nav-link" href="<?php echo base_url(); ?>user/logout">Logout</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-10">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard-content">
                        <div id="account-details" class="tab-pane fade show active">
                        <h3>Account details </h3>
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="account-login-form">
                                        <form action="<?php echo base_url();?>user/update_profile/<?php echo $user_data->u_id_pk;?>">
                                            
                                            <label>Name</label>
                                            <input name="name" value="<?php echo $user_data->u_name;?>" type="text">
                                            <label>Email</label>
                                            <input name="email" value="<?php echo $user_data->email;?>" type="text">
                                            <label>Contact </label>
                                            <input name="contact" value="<?php echo $user_data->contact;?>" type="text">
                                            
                                            <div class="button-box">
                                                <button type="submit" class="default-btn">save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="orders" class="tab-pane fade">
                            <h3>Orders</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Products</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $order_data = $this->order_product_model->user_order_data($_SESSION['u_id']);
                                                if($order_data != null){
                                                    $no =1;
                                                    foreach($order_data as $row){
                                                ?>
                                        <tr>
                                            <td><?php echo $no++?></td>
                                            <td><?php  echo date('M d,Y', strtotime($row->added_on));?></td>
                                            <td>₹ <?php echo $row->total_price;?></td>
                                            <td><a class="view"
                                                    href="<?php echo base_url();?>user/order_product/<?php echo $row->o_id;?>">view</a>
                                            </td>
                                        </tr>
                                        <?php } }else{?>
                                        <p style="color:red;"> No Data Found </p>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="downloads" class="tab-pane fade">
                            <h3>Wishlist</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Remove</th>
                                            <th>Product</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                $wish_list_data = $this->wishlist_model->user_wishlist_data($id);
                                                if($wish_list_data != null){
                                                    foreach($wish_list_data as $row){
                                                    $product_data = $this->product_master_model->showsingle_product_data($row->p_id_fk);
                                                ?>
                                        <tr>
                                            <td class="plantmore-product-remove"><a
                                                    href="<?php echo base_url();?>user/delete_wishlist/<?php echo $row->p_id_fk;?>"><i
                                                        class="fa fa-times"></i></a></td>
                                            <td><a
                                                    href="<?php echo base_url();?>user/single_product/<?php echo $row->p_id_fk;?>"><?php echo $product_data->p_name;?></a>
                                            </td>
                                            <td><a
                                                    href="<?php echo base_url();?>user/single_product/<?php echo $row->p_id_fk;?>"><img
                                                        src="<?php echo base_url().$product_data->pi_name;?>"
                                                        style="height:50px;width:50px;" /></a></td>
                                            <td><a
                                                    href="<?php echo base_url();?>user/single_product/<?php echo $row->p_id_fk;?>"><?php echo $product_data->price;?></a>
                                            </td>
                                        </tr>
                                        <?php } }else{?>
                                        <p style="color:red;"> No Data Found </p>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="address" class="tab-pane">
                            <p>The following addresses will be used on the checkout page by default. OR <a
                                    style="color:blue;" href="<?php echo base_url();?>user/new_address/dashboard"> Add
                                    New Address </a></p>
                            <h4 class="billing-address">Billing address</h4>
                            <?php 
                                       $address_data = $this->address_master_model->user_address_data($_SESSION['u_id']);
                                       foreach($address_data as $row){
                                       ?>
                            <a class="view"
                                href="<?php echo base_url() ?>user/edit_address/<?php echo $row->add_master_id_pk;?>">edit</a>
                            <a class="view"
                                href="<?php echo base_url() ?>user/delete_address/<?php echo $row->add_master_id_pk;?>">Delete
                            </a>
                            <a class="view"
                                href="<?php echo base_url() ?>user/default_address/<?php echo $row->add_master_id_pk;?>">Set
                                default </a>
                            <p><?php echo $row->first_name;?></p>
                            <p><?php echo $row->street_address;?></p>
                            <p> <?php if($row->is_default == 1){echo " * Default Address";};?></p>
                            <?php }?>
                        </div>
                        <div id="change-password" class="tab-pane fade">
                        <h3>Change Password </h3>
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="account-login-form">
                                        <form action="<?php echo base_url();?>user/update_password/<?php echo $user_data->u_id_pk;?>">
                                            
                                            <label>Password</label>
                                            <input name="password" type="text">
                                            
                                            <label>Confirm Password</label>
                                            <input name="password_confirm" type="text">
                                          
                                            <div class="button-box">
                                                <button type="submit" class="default-btn">save</button>
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

<?php include 'include/footer.php' ?>