 <?php include 'include/header.php' ?> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
 <!-- <script>
    $(document).ready(function(){
    $("#apply_coupon").click(function(){
        var coupon_code = $("#coupon_code").val();
        var cart_total_price = $("#cart_total_price").val();

        $.ajax({
            url: '<?php echo base_url();?>user/applycoupon',
            method: 'post',
            data: {
                coupon_code : coupon_code,
                cart_total_price : cart_total_price
            },
        });
    });
    });
 </script> -->
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
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Cart</li>
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
                        <div class="col-12">
                            <form action="<?php echo base_url();?>user/update_cart_product" method="post" class="cart-table">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="plantmore-product-remove">remove</th>
                                                <th class="plantmore-product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="cart-product-name">Size</th>
                                                <th class="plantmore-product-price">Unit Price</th>
                                                <th class="plantmore-product-quantity">Quantity</th>
                                                <th class="plantmore-product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($cart_product as $row)
                                            { 
                                                $product_id = $row->p_id_fk;
                                                
                                                $query = $this->db->get_where('product_master',array('p_id_pk'=>$product_id));
                                                $product=$query->row();
                                               
                                                $query1=$this->db->get_where('product_image',array('p_id_fk'=>$product_id));
                                                $image=$query1->row();
                                                
                                                $query = $this->db->get_where('size',array('size_id_pk'=>$row->size_id_fk));
                                                $size = $query->row();
                                                ?>
                                            <tr>
                                                <td class="plantmore-product-remove"><a href="<?php echo base_url();?>user/delete_cart_product/<?php echo $row->cart_p_id_pk;?>"><i class="fa fa-times"></i></a></td>
                                                <td class="plantmore-product-thumbnail"><a href="<?php echo base_url(); ?>user/single_product/<?php echo $product->p_id_pk;?>"><img src="<?php echo base_url().$image->pi_name; ?>"style='width:150px;height:150px;' alt=""></a></td>
                                                <td class="plantmore-product-name"><a href="<?php echo base_url(); ?>user/single_product/<?php echo $product->p_id_pk;?>"><?php echo $product->p_name;?></a></td>
                                                <td class="plantmore-product-name">
                                                <?php 
                                                echo $size->size_name;?>
                                                </td>
                                                <td class="plantmore-product-price"><span class="amount"><?php echo  ($row->cart_price/$row->cart_quantity);?></span></td>
                                                <td class="plantmore-product-quantity">
                                                    <input name = "<?php echo $row->cart_p_id_pk.'_quantity';?>" value="<?php echo $row->cart_quantity;?>" type="number">
                                                    <input type="hidden" name="<?php echo $row->cart_p_id_pk.'_old_quantity';?>" value="<?php echo $row->cart_quantity;?>"/>
                                                    <input type = "hidden" value = "<?php echo $row->cart_p_id_pk;?>" name = "id[]" />
                                                    <input type = "hidden" value = "<?php echo $row->cart_price;?>" name = "<?php echo $row->cart_p_id_pk.'_total_price';?>" />
                                                </td>
                                                <td class="product-subtotal"><span class="amount">₹ <?php echo $row->cart_price;?></span></td>
                                            </tr>
                                            <?php }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                            
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                                <input type="hidden" id="cart_total_price" name="cart_total_price" value="<?php echo $cart_data->total_amount;?>"/>
                                                <input class="button" id="apply_coupon" name="apply_coupon" value="Apply coupon" type="submit">
                                            
                                            <br/>
                                            <?php if(isset($_SESSION['coupon_status']) && isset($_SESSION['coupon_message'])){
                                                if($_SESSION['coupon_status'] == 'success'){
                                                $color = 'green';
                                                }else{
                                                    $color = 'red';
                                                }
                                                ?> 
                                            <p style="color:<?php echo $color;?>;"><?php echo $_SESSION['coupon_message'];?></p>
                                            <?php }?>
                                            </div>
                                            <div class="coupon2">
                                                
                                                <input class="button" name="update_cart" value="Update cart" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                            <li>Total <span>₹ <?php echo $cart_data->total_amount;?></span></li>
                                            
                                                <li>Discount <span> - ₹ <?php echo $cart_data->discount;?></span></li>
                                                <li>Total <span>₹ <?php echo $cart_data->discounted_price;?></span></li>
                                                
                                            </ul>
                                            <a href="<?php echo base_url();?>user/checkout_cart">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <!-- main-content-wrap end -->
            
            <?php include 'include/footer.php' ?>