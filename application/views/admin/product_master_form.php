<?php include 'include/header.php' ?>

<div class="robust-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12">
                <h2 class="content-header-title mb-0">
                    <?php if($operation == 'insert'){?>
                    Add Product
                    <?php }else{?>
                    Update Product
                    <?php }?>
                </h2>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-xs-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <?php if($operation == 'insert'){?>
                                Add Product
                                <?php }else{?>
                                Update Product
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
                                    Add Product
                                    <?php }else{?>
                                    Update Product
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
                                    <form enctype="multipart/form-data" class="form-horizontal" method="post"
                                        action="<?php echo base_url(); ?>admin/insert_product_master" novalidate>
                                        <?php }else {?>
                                        <?php if($type == 'product'){?>
                                        <form enctype="multipart/form-data" class="form-horizontal" method="post"
                                            action="<?php echo base_url(); ?>admin/update_product_master/<?php echo $product_master_data->p_id_pk;?>"
                                            novalidation>
                                            <?php }else{?>
                                            <form enctype="multipart/form-data" class="form-horizontal" method="post"
                                                action="<?php echo base_url(); ?>admin/update_quantity_master/<?php echo $product_master_data->p_id_pk;?>"
                                                novalidation>
                                                <?php } }?>
                                                <div class="row">
                                                    <?php if($type=='all' || $type == 'product'){?>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <h5>Product Name <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <?php if ($operation == 'insert'){ ?>
                                                                <input type="text" name="p_name" class="form-control"
                                                                    required
                                                                    data-validation-required-message="This field is required">
                                                                <?php }else {?>
                                                                <input type="text" name="p_name"
                                                                    value="<?php echo $product_master_data->p_name; ?>"
                                                                    class="form-control" required
                                                                    data-validation-required-message="This field is required">
                                                                <?php }?>
                                                            </div>

                                                        </div>


                                                        <div class="form-group">
                                                            <h5>Product Type <span class="required">*</span></h5>
                                                            <div class="controls">

                                                                <select name="pt_name" class="form-control" required
                                                                    data-validation-required-message="This field is required">
                                                                    <option selected value=""> Select product_type</option>
                                                                    <?php if ($operation == 'insert'){ 
                                                              foreach($product_type_data as $row){
                                                            ?>
                                                                    <option value="<?php echo $row->pt_id_pk?>">
                                                                        <?php echo $row->pt_name;?> </option>
                                                                    <?php } 
                                                                } else {
                                                                  foreach($product_type_data as $row){
                                                            ?>
                                                                    <option value="<?php echo $row->pt_id_pk?>"
                                                                        <?php if($product_master_data->pt_id_fk==$row->pt_id_pk){ echo 'selected'; }?>>
                                                                        <?php echo $row->pt_name;?> </option>
                                                                    <?php }
                                                            }?>
                                                                </select>
                                                            </div>

                                                        </div>




                                                        <div class="form-group">
                                                            <h5> Material<span class="required">*</span></h5>
                                                            <div class="controls">

                                                                <select name="m_name" class="form-control" required
                                                                    data-validation-required-message="This field is required">
                                                                    <option selected value=""> Select material</option>
                                                                    <?php if ($operation == 'insert'){ 
                                                            foreach($material_data as $row){
                                                            ?>
                                                                    <option value="<?php echo $row->m_id_pk?>">
                                                                        <?php echo $row->m_name;?> </option>
                                                                    <?php } 
                                                            } else {
                                                              foreach($material_data as $row){
                                                                ?>
                                                                    <option value="<?php echo $row->m_id_pk?>"
                                                                        <?php if($product_master_data->m_id_fk==$row->m_id_pk){ echo 'selected'; }?>>
                                                                        <?php echo $row->m_name;?> </option>
                                                                    <?php }
                                                            }?>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <h5>Price <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <?php if ($operation == 'insert'){ ?>
                                                                <input type="text" name="price" class="form-control"
                                                                    required
                                                                    data-validation-required-message="This field is required">
                                                                <?php }else {?>
                                                                <input type="text" name="price"
                                                                    value="<?php echo $product_master_data->price; ?>"
                                                                    class="form-control" required
                                                                    data-validation-required-message="This field is required">
                                                                <?php }?>
                                                            </div>

                                                        </div>


                                                        <div class="form-group">
                                                            <h5> Colour <span class="required">*</span></h5>
                                                            <div class="controls">

                                                                <select name="colour_name" class="form-control" required
                                                                    data-validation-required-message="This field is required">
                                                                    <option selected value=""> Select colour</option>
                                                                    <?php if ($operation == 'insert'){ 
                                                            foreach($colour_data as $row){
                                                            ?>
                                                                    <option value="<?php echo $row->colour_id_pk?>">
                                                                        <?php echo $row->colour_name;?> </option>
                                                                    <?php } 
                                                              } else {
                                                                foreach($colour_data as $row){
                                                                  ?>
                                                                    <option value="<?php echo $row->colour_id_pk?>"
                                                                        <?php if($product_master_data->colour_id_fk==$row->colour_id_pk){ echo 'selected'; }?>>
                                                                        <?php echo $row->colour_name;?> </option>
                                                                    <?php }
                                                            }?>
                                                                </select>
                                                            </div>

                                                        </div>

                                                        <?php if ($operation == 'insert'){?>
                                                        <div class="form-group">
                                                            <h5>Images
                                                                <span class="required">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="file" name="file[]" class="form-control"
                                                                    multiple required>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h5>Description <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <?php if ($operation == 'insert'){ ?>
                                                                <textarea name="description"  id="textarea" class="form-control" required
                                                                    >
                                                            </textarea>
                                                                <?php }else {?>
                                                                <textarea name="description"  id="textarea" class="form-control" required
                                                                    data-validation-required-message="This field is required"><?php echo $product_master_data->description; ?>
                                                            </textarea>
                                                                <?php }?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                    <?php if($type == 'all' || $type == 'quantity'){?>
                                                    <div class="col-md-12">

                                                        <h4 class="form-section"><i class="icon-clipboard4"></i>
                                                            Quantity
                                                        </h4>
                                                        <div class="row">
                                                            <?php foreach($size_data as $row){?>


                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="projectinput5"><?php echo $row->size_name;?></label>
                                                                    <?php if ($operation == 'insert'){ ?>
                                                                    <input type="text"
                                                                        name="<?php echo $row->size_name;?>"
                                                                        class="form-control" required
                                                                        data-validation-required-message="This field is required">
                                                                    <?php }
                                                            else
                                                             { 
                                                              $query = $this->db->get_where('product_quantity_master',array('p_id_fk'=>$id,'s_id_fk'=>$row->size_id_pk)); 
                                                              $q = $query->row(); 
                                                              
                                                              ?>
                                                                    <input type="text"
                                                                        name="<?php echo $row->size_name;?>"
                                                                        class="form-control" required
                                                                        value='<?php if($q!=null) {echo $q->quantity;}else {echo '0';}?>'
                                                                        data-validation-required-message="This field is required">

                                                                    <?php  }?>
                                                                </div>
                                                            </div>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                    <div class='col-md-12'>
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