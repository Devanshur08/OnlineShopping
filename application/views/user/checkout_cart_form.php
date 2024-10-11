<?php include 'include/header.php' ?>


<!-- breadcrumb-area start -->
<div class="breadcrumb-area ptb-30 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- main-content-wrap start -->
<div class="main-content-wrap pt-100">
    <div class="container">

        <!-- checkout-area start -->
        <div class="checkout-area">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <form action="<?php echo base_url();?>user/place_order" method="post">
                                <?php if($address_data != null){
                                    $_SESSION['address_id'] = $address_data->add_master_id_pk;?>
                                    <input type="hidden" name="email" value="<?php echo $address_data->email;?>">
                                <input type="hidden" name="is_default" value="1">
                                
                                <?php }else{?>
                                <input type="hidden" name="is_default" value="0">
                                <?php } ?>
                                <div class="checkbox-form mt-30">
                                    <h3 class="shoping-checkboxt-title">Billing Details <br />

                                    </h3>
                                    <span class="required">* Choose Default From <a
                                            href="<?php echo base_url();?>user/my_account/<?php echo $_SESSION['u_id'];?>">Profile</a></span>
                                    <br />
                                    <br />
                                    <br />

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="single-form-row">
                                                <label>Name <span class="required">*</span></label>
                                                <?php if($address_data != null){?>
                                                <input type="text" disabled name="user_name"
                                                    value="<?php echo $address_data->first_name;?>">
                                                <?php }else{?>
                                                <input type="text" name="user_name">
                                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="single-form-row">
                                                <label>Email <span class="required">*</span></label>
                                                <?php if($address_data != null) { ?>
                                                <input type="text" disabled name="user_email"
                                                    value="<?php echo $address_data->email;?>">
                                                <?php } else { ?>
                                                <input type="text" name="user_email">
                                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="single-form-row">
                                                <label>Street address <span class="required">*</span></label>
                                                <?php if($address_data != null){?>
                                                <textarea name="user_address" disabled cols="5" rows="2"
                                                    class="checkout-mess" placeholder="House number and street name"><?php echo $address_data->street_address;?>
                                                    </textarea>
                                                <?php } else { ?>
                                                <textarea name="user_address" cols="5" rows="2" class="checkout-mess"
                                                    placeholder="House number and street name"></textarea>
                                                <?php } ?>
                                            </p>
                                        </div>

                                        <div class="col-lg-12">
                                            <p class="single-form-row">
                                                <label>City <span class="required">*</span></label>
                                                <?php if($address_data != null){ ?>
                                                <input type="text" name="user_city" disabled
                                                    value="<?php echo $address_data->city;?>">
                                                <?php } else { ?>
                                                <input type="text" name="user_city">
                                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="single-form-row">
                                                <label>State</label>
                                                <?php if($address_data != null) {?>
                                                <input type="text" name="user_state"
                                                    value="<?php echo $address_data->state;?>" disabled>
                                                <?php } else { ?>
                                                <input type="text" name="user_state">
                                                <?php }?>
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="single-form-row">
                                                <label>Pincode <span class="required">*</span></label>
                                                <?php if($address_data != null){ ?>
                                                <input type="text" name="user_pincode"
                                                    value="<?php echo $address_data->postcode;?>" disabled>
                                                <?php } else {?>
                                                <input type="text" name="user_pincode">
                                                <?php }?>
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="single-form-row">
                                                <label>Phone</label>
                                                <?php if($address_data != null){ ?>
                                                <input type="text" name="user_phoneno"
                                                    value="<?php echo $address_data->phone_number;?>" disabled>
                                                <?php } else {?>
                                                <input type="text" name="user_phoneno">
                                                <?php }?>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="checkout-review-order mt-30 ">

                                <h3 class="shoping-checkboxt-title">Your order</h3>
                                <table class="checkout-review-order-table">
                                    <thead>
                                        <tr>
                                            <th class="t-product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if($cart_product != null){ 
                                                            foreach($cart_product as $row){
                                                            $product_id = $row->p_id_fk;
                                                            $query = $this->db->get_where('product_master',array('p_id_pk'=>$product_id));
                                                            $product=$query->row();?>
                                        <tr class="cart_item">
                                            <td class="t-product-name"><?php echo $product->p_name;?>
                                                <strong class="product-quantity">×
                                                    <?php echo $row->cart_quantity;?></strong></td>
                                            <td class="t-product-price"><span>₹
                                                    <?php echo $row->cart_price;?></span></td>

                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                    <tfoot>

                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>Free shipping</td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <input type="hidden" name="total" value="<?php echo $cart_data->total_amount;?>">
                                            <td><strong><span>₹
                                                        <?php echo $cart_data->total_amount;?></span></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="checkout-payment">
                                    <button class="button-continue-payment" type="submit">Place Order</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout-area end -->
    </div>
</div>
<br>
<br>
<br>
<!-- main-content-wrap end -->

<?php include 'include/footer.php'?>