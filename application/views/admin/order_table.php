<?php include 'include/header.php'?>
<div class="robust-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12">
                <h2 class="content-header-title mb-0">Order Data</h2>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-xs-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Order Data
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-body">
        <!-- File export table -->
        <section id="file-export">
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Order Data</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="icon-m	inus4"></i></a></li>
                                    <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                    <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block card-dashboard">
                                <table class="table table-striped table-bordered file-export">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Customer Name</th>
                                            <th>Total Amount</th>
                                            <th>Placed Date</th>
                                            <th>View Products</th>
                                            <th>Delivery</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($order_data != null) {
    $no = 1;
    foreach ($order_data as $row) {?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->u_name; ?></td>
                                            <td><?php echo $row->total_price; ?></td>
                                            <td><?php echo date('d-m-Y', strtotime($row->added_on)); ?></td>
                                            <td><a class="icon-th-list" href="" data-toggle="modal"
                                                    data-target="#viewproduct<?php echo $row->o_id; ?>"></a>
                                            </td>
                                            <td><a class="icon-truck2" href="" data-toggle="modal"
                                                    data-target="#deliverorder<?php echo $row->o_id; ?>"></a>
                                            </td>

                                        </tr>
                                        <?php }
}?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- File export table -->
    </div>
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<?php foreach ($order_data as $row) {?>
<div class="modal animated slideInDown text-xs-left" id="viewproduct<?php echo $row->o_id; ?>" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel77" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel77">Order Products</h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered file-export">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $order_product_data = $this->order_product_master_model->order_product_master_data($row->o_id);
                            if ($order_product_data != null) {
                                $no = 1;
                            foreach ($order_product_data as $row1) {
                                $product_data = $this->product_master_model->showsingle_product_data($row1->p_id_fk);
                        ?>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $product_data->p_name; ?></td>
                            <td><?php echo $row1->quantity; ?></td>
                            <td><?php echo $row1->net_price; ?></td>
                        </tr>
                        <?php } }?>

                    </tbody>

                </table>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal animated slideInDown text-xs-left" id="deliverorder<?php echo $row->o_id; ?>" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel77" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel77">Confirm Order</h4>
            </div>
            <div class="modal-body">
                <h5>Accept and Deliver The Order.</h5>
            </div>
            <div class="modal-footer">
                <form action="<?php echo base_url();?>admin/deliver_order/<?php echo $row->o_id;?>/<?php echo $row->u_id_fk;?>" method="post">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-outline-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php }?>
<?php include 'include/footer.php'?>