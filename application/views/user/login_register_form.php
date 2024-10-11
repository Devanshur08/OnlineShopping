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
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
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
                <?php if(isset($_SESSION['is_register'])&&$_SESSION['is_register'] != null){?>
                <p style="color:green"> *Successfully Registered. Please Login</p>
                <?php }?>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="customer-login-register">
                                <h3>Login</h3>
                                <div class="login-Register-info">
                                    <form action="<?php echo base_url(); ?>user/login" method="post">
                                        <p class="coupon-input form-row-first">
                                            <label>Username or email <span class="required">*</span></label>
                                            <input type="text" name="email">
                                        </p>
                                        <p class="coupon-input form-row-last">
                                            <label>Password <span class="required">*</span></label>
                                            <input type="password" name="password">
                                        </p>
                                       <div class="clear"></div>
                                        <p>
                                            <button value="Login" name="login" class="button-login" type="submit">Login</button>
                                            <label><input type="checkbox" value="1"><span>Remember me</span></label>
                                            <a href="#" class="lost-password">Lost your password?</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6  col-md-6 col-sm-12">
                            <div class="customer-login-register">
                                <h3>Register</h3>
                                <div class="login-Register-info">
                                    <form action="<?php echo base_url(); ?>user/register" method='post'>
                                        <p class="coupon-input form-row-first">
                                            <label>Username<span class="required">*</span></label>
                                            <input type="text" name="u_name">
                                        </p>
                                        <p class="coupon-input form-row-first">
                                            <label>Contact<span class="required">*</span></label>
                                            <input type="text" name="contact">
                                        </p>
                                        <p class="coupon-input form-row-first">
                                            <label>E-Mail<span class="required">*</span></label>
                                            <input type="text" name="email">
                                        </p>
                                        <p class="coupon-input form-row-last">
                                            <label>Password <span class="required">*</span></label>
                                            <input type="password" name="password">
                                        </p>
                                       <div class="clear"></div>
                                        <p>
                                            <button class="button-login" type="submit">Register</button>
                                        </p>
                                    </form>
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