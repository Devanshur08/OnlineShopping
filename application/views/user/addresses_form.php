<?php include 'include/header.php' ?>

            
            <!-- breadcrumb-area start -->
            <div class="breadcrumb-area ptb-30 bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                                <li class="breadcrumb-item active">Address</li>
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
                                    <div class="col-lg-12 col-sm-12">
                                    <?php if($operation == "insert"){?>
                                        <form action="<?php echo base_url();?>user/insert_address/<?php echo $type;?>" method="post">
                                    <?php }else{?>
                                        <form action="<?php echo base_url();?>user/update_address/<?php echo $address_data->add_master_id_pk;?>" method="post">
                                    <?php }?>
                                        <div class="checkbox-form mt-30">
                                            <?php if($operation == 'insert'){?>
                                            <h3 class="shoping-checkboxt-title">New Address</h3>
                                            <?php } else {?>
                                                <h3 class="shoping-checkboxt-title">Update Address</h3>
                                            <?php } ?>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <p class="single-form-row">
                                                        <label>First name <span class="required">*</span></label>
                                                        <?php if($operation == 'insert'){?>
                                                        <input type="text" name="user_name">
                                                        <?php } else {?>
                                                        <input type="text" name="user_name" value='<?php echo $address_data->first_name;?>'>
                                                        <?php }?>

                                                    </p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="single-form-row">
                                                        <label> email <span class="required">*</span></label>
                                                        <?php if($operation == 'insert'){?>
                                                        <input type="text" name="user_email">
                                                        <?php } else {?>
                                                        <input type="text" name="user_name" value='<?php echo $address_data->email;?>'>
                                                        <?php }?>                                                   
                                                         </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label>Street address <span class="required">*</span></label>
                                                        <?php if($operation == 'insert'){?>
                                                        <textarea name="user_address" placeholder="House number and street name">
                                                        </textarea>
                                                        <?php } else {?>
                                                            <textarea name="user_address" placeholder="House number and street name">
                                                            <?php echo $address_data->street_address;?>
                                                        </textarea>
                                                        <?php }?>
                                                    </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label> City <span class="required">*</span></label>
                                                        <?php if($operation == 'insert'){?>
                                                        <input type="text" name="user_city">
                                                        <?php } else {?>
                                                        <input type="text" name="city" value='<?php echo $address_data->city;?>'>
                                                        <?php }?>

                                                    </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label>State </label>
                                                        <?php if($operation == 'insert'){?>
                                                        <input type="text" name="user_state">
                                                        <?php }else{?>
                                                        <input type="text" name="user_state" value='<?php echo $address_data->state;?>'>
                                                        <?php }?>


                                                    </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label>Pincode <span class="required">*</span></label>
                                                        <?php if($operation == 'insert'){?>
                                                        <input type="text" name="user_pincode">
                                                        <?php }else{?>
                                                        <input type="text" name="user_pincode" value='<?php echo $address_data->postcode;?>'>
                                                        <?php }?>


                                                    </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label>Phone No</label>
                                                        <?php if($operation == 'insert'){?>
                                                        <input type="text" name="user_phoneno">
                                                        <?php }else{?>
                                                        <input type="text" name="user_phoneno" value='<?php echo $address_data->phone_number;?>'>
                                                        <?php }?>
                                                    </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row contact-submit-btn">
                                                        <Button type="submit" class="submit-btn">Submit </button>
                                                    </p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        </form>
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