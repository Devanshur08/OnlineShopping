<?php include 'include/header.php' ?>

<div class="robust-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Sales stats -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="row">
                                    <div
                                        class="col-xl-3 col-lg-6 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                        <div class="media px-1">
                                            <div class="media-left media-middle">
                                                <i class="icon-box font-large-1 blue-grey"></i>
                                            </div>
                                            <div class="media-body text-xs-right">
                                                <span
                                                    class="font-large-2 text-bold-300 info"><?php echo $product_count;?></span>
                                            </div>
                                            <p class="text-muted">Total Products </p>
                                            <progress class="progress progress-sm progress-info"
                                                value="<?php echo $product_count;?>" max="100"></progress>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-6 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                        <div class="media px-1">
                                            <div class="media-left media-middle">
                                                <i class="icon-truck2 font-large-1 blue-grey"></i>
                                            </div>
                                            <div class="media-body text-xs-right">
                                                <span
                                                    class="font-large-2 text-bold-300 deep-orange"><?php echo $order_count;?></span>
                                            </div>
                                            <p class="text-muted">Total Orders</p>
                                            <progress class="progress progress-sm progress-deep-orange"
                                                value="<?php echo $order_count;?>" max="100"></progress>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-6 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                        <div class="media px-1">
                                            <div class="media-left media-middle">
                                                <i class="icon-user4 font-large-1 blue-grey"></i>
                                            </div>
                                            <div class="media-body text-xs-right">
                                                <span
                                                    class="font-large-2 text-bold-300 danger"><?php echo $user_count;?></span>
                                            </div>
                                            <p class="text-muted">Total User</p>
                                            <progress class="progress progress-sm progress-danger"
                                                value="<?php echo $user_count;?>" max="100"></progress>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-sm-12">
                                        <div class="media px-1">
                                            <div class="media-left media-middle">
                                                <i class="icon-tag3 font-large-1 blue-grey"></i>
                                            </div>
                                            <div class="media-body text-xs-right">
                                                <span
                                                    class="font-large-2 text-bold-300 success"><?php echo $sale_count;?></span>
                                            </div>
                                            <p class="text-muted">Total Offers</p>
                                            <progress class="progress progress-sm progress-success"
                                                value="<?php echo $sale_count;?>" max="100"></progress>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Sales stats -->

            <!-- Recent Orders -->
            <div class="row">

                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recent Orders</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-block">

                            </div>
                            <div class="table-responsive">
                                <table id="recent-orders" class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Invoice#</th>
                                            <th>Customer Name</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($order_data != null){ 
                                foreach($order_data as $row){?>
                                        <tr>
                                            <td class="text-truncate">INV-<?php echo $row->o_id;?></td>
                                            <td class="text-truncate"><?php echo $row->u_name;?></td>
                                            <td class="text-truncate">
                                                <?php $newDate = date("d-m-Y", strtotime($row->added_on));
                                    echo $newDate;?>
                                            </td>
                                            <td class="text-truncate">₹ <?php echo $row->total_price;?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Recent Orders -->

        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<?php include 'include/footer.php' ?>