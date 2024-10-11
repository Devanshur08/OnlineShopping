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
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
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
                        <div class="col-lg-7 col-sm-12">
                            <div class="contact-form mt-100">
                                <div class="contact-form-info">
                                    <div class="contact-title">
                                        <h3>TELL US YOUR QUERY</h3>
                                    </div>
                                    <form  action="<?php echo base_url();?>user/contact_us" method="POST">
                                       <div class="contact-page-form">
                                           <div class="contact-input">
                                                <div class="contact-inner">
                                                    <input name="name" type="text" placeholder="Name *" >
                                                </div>
                                                <div class="contact-inner">
                                                    <input type="text" placeholder="Email *"  name="email">
                                                </div>
                                                <div class="contact-inner">
                                                    <input type="text" placeholder="Subject *" name="title">
                                                </div>
                                                <div class="contact-inner contact-message">
                                                    <textarea name="description"  placeholder="Message *"></textarea>
                                                </div>
                                            </div>
                                            <div class="contact-submit-btn">
                                                <button class="submit-btn" type="submit">Send</button>
                                              
                                            </div>
                                       </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-12">
                            <div class="contact-infor mt-100">
                                <div class="contact-title">
                                    <h3>CONTACT US</h3>
                                </div>
                                <div class="contact-dec">
                                    <p></p>
                                </div>
                                <div class="contact-address">
                                    <ul>
                                        <li><i class="fa fa-fax"> </i> Address : No 40 Baria Sreet 133/2 NewYork City</li>
                                        <li><i class="fa fa-phone">&nbsp;</i> Infor@chairman.com</li>
                                        <li><i class="fa fa-envelope-o">&nbsp;</i> 0(1234) 567 890</li>
                                    </ul>
                                </div>
                                <div class="work-hours">
                                    <h3><strong>Working hours</strong></h3>
                                    <p><strong>Monday &ndash; Saturday</strong>: &nbsp;08AM &ndash; 22PM</p>
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