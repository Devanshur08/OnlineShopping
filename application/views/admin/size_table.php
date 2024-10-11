<?php include 'include/header.php' ?>
<div class="robust-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12">
            <h2 class="content-header-title mb-0">Size Data</h2>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Size Data
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
                    <h4 class="card-title">Size Data</h4>
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
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($size_data != null){
                                    $no = 1;
                                    foreach($size_data as $row){?>
                                
                                <tr>
                                    <td><?php echo $no++;?></td>
                                    <td><?php echo $row->size_name;?></td>
                                    <td><a class="icon-pencil-square-o" href="<?php echo base_url();?>admin/edit_size/<?php echo $row->size_id_pk;?>"></a></td>
                                    <td><a class="icon-trash-o" href="<?php echo base_url();?>admin/delete_size/<?php echo $row->size_id_pk;?>"></a></td>
                                    
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

<?php include 'include/footer.php' ?>