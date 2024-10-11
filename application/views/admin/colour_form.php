<?php include 'include/header.php' ?>

<div class="robust-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12">
                <h2 class="content-header-title mb-0">
                    <?php if($operation == 'insert'){?>
                    Add Colour
                    <?php }else{?>
                    Update Colour
                    <?php }?>
                </h2>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-xs-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <?php if($operation == 'insert'){?>
                                Add Colour
                                <?php }else{?>
                                Update Colour
                                <?php }?>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <!-- Input Validation start -->
            <section class="input-validation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <?php if($operation == 'insert'){?>
                                    Add Colour
                                    <?php }else{?>
                                    Update COlour
                                    <?php }?>
                                </h4>
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
                                <div class="card-block ">
                                    <?php if ($operation == 'insert') {?>
                                    <form class="form-horizontal" method="post"
                                        action="<?php echo base_url(); ?>admin/insert_colour" novalidate>
                                        <?php }else {?>
                                        <form class="form-horizontal" method="post"
                                            action="<?php echo base_url(); ?>admin/update_colour/<?php echo $colour_data->colour_id_pk;?>"
                                            novalidation>

                                            <?php }?>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Colour Name <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <?php if ($operation == 'insert'){ ?>
                                                            <input type="text" name="colour_name" class="form-control"
                                                                required
                                                                data-validation-required-message="This field is required">
                                                            <?php }else {?>
                                                            <input type="text" name="colour_name"
                                                                value="<?php echo $colour_data->colour_name; ?>"
                                                                class="form-control" required
                                                                data-validation-required-message="This field is required">
                                                            <?php }?>
                                                        </div>

                                                    </div>
                                                    <div class="text-xs-right">
                                                        <button type="submit" class="btn btn-success">Submit <i
                                                                class="icon-thumbs-up position-right"></i></button>
                                                        <button type="reset" class="btn btn-danger">Reset <i
                                                                class="icon-refresh position-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Input Validation end -->







        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include 'include/footer.php' ?>