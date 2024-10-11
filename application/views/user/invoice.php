<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>RCD Apparel</title>
	
	<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>user_content/invoicecss/style.css' />
	<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>user_content/invoicecss/print.css' media="print" />
	<script type='text/javascript' src='<?php echo base_url(); ?>user_content/invoicejs/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>user_content/invoicejs/example.js'></script>

</head>

<body>

	<div id="page-wrap">

            <textarea id="header" readonly>INVOICE</textarea>
		
		<div id="identity">
		<?php
                   $uid=$order_info['address_id_fk'];
                   $query = $this->db->get_where('address_master', array('add_master_id_pk' =>$uid));
                   $add=$query->row_array();                                 
                ?>
                    <textarea id="address" readonly>

<?php echo $add['first_name'] ?>

<?php echo $add['street_address']; ?>,
<?php echo $add['state']; ?>,<?php echo $add['city']; ?>,<?php echo $add['postcode']; ?>

Phone: (+91)<?php echo $add['phone_number']; ?></textarea>

            <div id="logo">

              
              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 260px, max height: 370px)
              </div>
                <!-- <img id="image" width="110px" src="<?php echo base_url(); ?>client_content/wp-content/uploads/2016/09/logo.png" alt="logo" /> -->
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

           <!-- <textarea id="customer-title">Widget Corp.
c/o Steve Widget</textarea>
                    --> 
            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea readonly><?php echo $order_info['o_id']; ?></textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date" readonly><?php echo $order_info['added_on']; ?></textarea></td>
                </tr>
           <!--     <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr>-->

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Product Name</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Total</th>
		  </tr>
                    <?php
		     foreach ($order_product as $key => $val) {
                                $pid=$val->p_id_fk;
                                    $query = $this->db->get_where('product_master', array('p_id_pk' =>$pid));
                                    $d=$query->row_array();
                                    
                                                        ?>
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea><?php echo $d['p_name']?></textarea></div></td>
		      <td><textarea class="cost" cols=""readonly>&#8377;<?php echo $d['price']; ?></textarea></td>
              <td><textarea class="qty" readonly><?php echo $val->quantity; ?></textarea></td>
		      <td><span class="price" readonly>&#8377; <?php echo $val->net_price; ?></span></td>
		  </tr>
		  <?php
                     }
                  ?>
		 
		  <tr id="hiderow">
		    <td colspan="5">Payment Info : COD</td>
		  </tr>
		  
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="subtotal"><?php echo $order_info['total_price']; ?></div></td>
		  </tr>
		  
		</table>
		
		<div id="terms">
		  <h5>Contact US</h5>
		  <textarea>189,suyognagar Soc.,Near.Althan Tenament,Surat/,395017. (+91)8547563211</textarea>
		</div>
	
	</div>
	
</body>

</html>