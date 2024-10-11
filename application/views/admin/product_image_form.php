<?php include  'include/header.php'; ?>
<!-- / main menu-->

<div class="robust-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12">
                <h2 class="content-header-title mb-0"><?php echo $product_data->p_name;?></h2>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-xs-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"><?php echo $product_data->p_name;?></a>
                            </li>
                            <li class="breadcrumb-item active">Gallery
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-6 col-xs-12">
                <div class="form-group"></div>
                <!-- Round Outline Icon Buttons-->
                <button type="button" class="btn-icon btn btn-secondary btn-round"><i class="icon-bell4"></i></button>
                <button type="button" class="btn-icon btn btn-secondary btn-round"><i class="icon-help2"></i></button>
                <button type="button" class="btn-icon btn btn-secondary btn-round"><i class="icon-cog3"></i></button>
            </div>
            <div class="content-header-lead col-xs-12 mt-2">

            </div>
        </div>
        <div class="content-body">



            <!-- Image grid -->
            <section id="image-gallery" class="card">
                <div class="card-header">
                    <h4 class="card-title">Image gallery</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div class="card-text">
                        </div>
                    </div>
                    <div class="card-block  my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                        <div class="row">

                            <?php if($product_image != null){
        // print_r($product_image);
                                    $no = 1;
                                    foreach($product_image as $row){?>

                            <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope
                                itemtype="http://schema.org/ImageObject">
                                <a href="robust-assets/images/gallery/1.jpg" itemprop="contentUrl" data-size="480x360">
                                    <img class="img-thumbnail img-fluid" src="<?php echo base_url().$row['pi_name']; ?>"
                                        itemprop="thumbnail" alt="Image description" />
                                </a>
                                <div class="card-block">
                                <h4 class="card-title">
                                    <a
                                        href="<?php echo base_url(); ?>Admin/delete_product_image/<?php echo $row['pi_id_pk']; ?>/<?php echo $product_data->p_id_pk;?>">
                                        <button type="button"
                                            class="btn btn-float btn-float-lg btn-outline-primary btn-round">
                                            <span class="ladda-label">
                                                <i class="icon-android-delete"></i>
                                            </span>
                                            <span class="ladda-spinner"></span>
                                        </button>
                                    </a>
                                </h4>
                            </div>
                            </figure>

                            <?php
         }} ?>
           
           

             </div>

                        <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#iconForm">
                            add new image
                        </button>


                    </div>
                    <!--/ Image grid -->


                </div>
                <!--/ PhotoSwipe -->
            </section>
            <!--/ Image grid -->



        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="modal fade text-xs-left" id="iconForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="myModalLabel34">Image Upload</h3>
            </div>
            <form method='post' action='<?php echo base_url();?>admin/insert_product_image/<?php echo $product_data->p_id_pk;?>' enctype='multipart/form-data'>
                <div class="modal-body">
                    <label>Image: </label>
                    <div class="form-group position-relative has-icon-left">
                        <input type="file" placeholder="Image Upload" name='file[]' multiple class="form-control">
                        <div class="form-control-position">
                            <i class="icon-mail6 text-muted"></i>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                    <input type="submit" class="btn btn-outline-primary btn-lg" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include  'include/footer.php'; ?>