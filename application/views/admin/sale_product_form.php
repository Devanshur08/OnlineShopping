<?php include 'include/header.php' ?>

<div class="robust-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12">
                <h2 class="content-header-title mb-0">
                    <?php if($operation == 'insert'){?>
                    Add Sale Product
                    <?php }else{?>
                    Update Sale Product
                    <?php }?>
                </h2>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-xs-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <?php if($operation == 'insert'){?>
                                Add Sale Product
                                <?php }else{?>
                                Update Sale Product
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
                <div class=" col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <?php if($operation == 'insert'){?>
                                Add Sale Product
                                <?php }else{?>
                                Update Sale Product
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
                                    action="<?php echo base_url(); ?>admin/insert_sale_product" novalidate>
                                    <?php }else {?>
                                    <form class="form-horizontal" method="post"
                                        action="<?php echo base_url(); ?>admin/update_sale_product/<?php echo $sale_product_data->sale_p_id_pk;?>"
                                        novalidate>

                                        <?php }?>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Sale Name <span class="required">*</span></h5>
                                                    <div class="controls">

                                                        <select name="sale_name" class="form-control" required
                                                            data-validation-required-message="This field is required">
                                                            <option selected value=""> Select Sale</option>
                                                            <?php if ($operation == 'insert'){ 
                              foreach($sale_data as $row){
                              ?>
                                                            <option value="<?php echo $row->sale_id_pk?>">
                                                                <?php echo $row->sale_name;?> </option>
                                                            <?php } 
                            } else {
                              foreach($sale_data as $row){
                                ?>
                                                            <option value="<?php echo $row->sale_id_pk?>"
                                                                <?php if($sale_product_data->sale_id_fk==$row->sale_id_pk){ echo 'selected'; }?>>
                                                                <?php echo $row->sale_name;?> </option>
                                                            <?php }
                            }?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Sale Category Name <span class="required">*</span></h5>
                                                    <div class="controls">

                                                        <select name="sale_c_name" class="form-control" required
                                                            data-validation-required-message="This field is required">
                                                            <option selected value=""> Select Sale Category</option>
                                                            <?php if ($operation == 'insert'){ 
                              foreach($sale_category_data as $row){
                              ?>
                                                            <option value="<?php echo $row->sale_c_id_pk?>">
                                                                <?php echo $row->sale_c_name;?> </option>
                                                            <?php } 
                            } else {
                              foreach($sale_category_data as $row){
                                ?>
                                                            <option value="<?php echo $row->sale_c_id_pk?>"
                                                                <?php if($sale_product_data->sale_c_id_fk==$row->sale_c_id_pk){ echo 'selected'; }?>>
                                                                <?php echo $row->sale_c_name;?> </option>
                                                            <?php }
                            }?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h5>Product <span class="required">*</span></h5>
                                                    <div class="controls">

                                                        <select name="p_name" class="form-control" required
                                                            data-validation-required-message="This field is required">
                                                            <option selected value=""> Select Product</option>
                                                            <?php if ($operation == 'insert'){ 
                                foreach($product_data as $row){
                                ?>
                                                            <option value="<?php echo $row->p_id_pk?>">
                                                                <?php echo $row->p_name;?> </option>
                                                            <?php } 
                              } else {
                                foreach($product_data as $row){
                                  ?>
                                                            <option value="<?php echo $row->p_id_pk?>"
                                                                <?php if($sale_product_data->p_id_fk==$row->p_id_pk){ echo 'selected'; }?>>
                                                                <?php echo $row->p_name;?> </option>
                                                            <?php }
                              }?>
                                                        </select>
                                                    </div>
                                                </div>
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