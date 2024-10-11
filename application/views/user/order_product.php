<?php include 'include/header.php' ?> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
 <script>
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
                                                <td class="plantmore-product-thumbnail"><img src="<?php echo base_url().$image->pi_name; ?>"style='width:150px;height:150px;' alt=""></td>
                                                <td class="plantmore-product-name"><?php echo $product->p_name;?></td>
                                                <td class="plantmore-product-name">
                                                <?php 
                                                echo $size->size_name;?>
                                                </td>
                                                <td class="plantmore-product-price"><span class="amount">₹ <?php echo  ($row->net_price/$row->quantity);?></span></td>
                                                <td class="plantmore-product-quantity">
                                                <?php echo $row->quantity;?>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">₹ <?php echo $row->net_price;?></span></td>
                                            </tr>
                                            <?php }
                                            ?>
                                        </tbody>
                                    </table>
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