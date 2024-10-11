<?php
class admin extends CI_controller
{

    function __construct(){
        parent::__construct();
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'nehalp038@gmail.com',
            'smtp_pass' => 'NJP1367@#$',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");

    }
    	//Dashboard
	public function index()
	{
		if(isset($_SESSION['user_id'])){
            $data['admin']=$this->user_master_model->user_master_data($_SESSION['user_id']);
            $data['product_count'] = count($this->product_master_model->showproduct_master_data());
            $data['order_count'] = count($this->order_product_model->showorder_product_data());
            $data['user_count'] = count($this->user_master_model->showuser_master_data());
            $data['sale_count'] = count($this->sale_model->showsale_data());
            $data['order_data'] = $this->order_product_model->recentorder_product_data();

			$this->load->view('admin/index',$data);
		}else{
			$this->load->view('admin/login');
		}


	}
	public function login()
	{
		$data['email']=$this->input->post('email');
		$data['password']=$this->input->post('password');
		$result = $this->user_master_model->user_master_oath_data($data['email'],$data['password'],'admin');

		if($result!=null){

			$_SESSION['user_id'] = $result->u_id_pk;
			$_SESSION['user_name'] = $result->u_name;
			$_SESSION['user_email'] = $result->email;
			redirect("admin/index");
		}else{
			$data['invalid']="Invalid Usename Or Password";
			$this->load->view('admin/login',$data);
		}

	}
	public function logout()
	{
			unset($_SESSION['user_id']);
			unset($_SESSION['user_name']);
			unset($_SESSION['user_email']);

            redirect("admin/index");
	}


    //Contact us
    public function show_contact()
    {
        $data1['is_read'] = 1;
		$this->contact_model->update_all_contact($data1);
        $data['contact_data'] = $this->contact_model->showcontact_data();
     //  print_r($data);die;
        $this->load->view('Admin/contact_table', $data);

    }

    public function delete_contact($id)
    {
        $this->contact_model->delete_contact($id);
        redirect('admin/show_contact');
    }

    //Order
    public function show_order()
    {
        $data1['is_read'] = 1;
		$this->order_product_model->update_all_order($data1);
        $data['order_data'] = $this->order_product_model->show_undelivered_order();
     //  print_r($data);die;
        $this->load->view('Admin/order_table', $data);

    }

    public function show_delivered_order(){
        $data['order_data'] = $this->order_product_model->show_delivered_order();
     //  print_r($data);die;
        $this->load->view('Admin/delivered_order_table', $data);
    }

    public function deliver_order($order_id,$user_id){
        $data1['is_delivered'] = 1;
        $this->order_product_model->update_order_product($order_id,$data1);
        $data['t_id_fk'] = 1;
        $data['o_id_fk'] = $order_id;
        $this->delivery_model->insert_delivery($data);

        $user_data = $this->user_master_model->user_master_data($user_id);
        $transport_data = $this->transport_model->transport_data($data['t_id_fk']);
        $sub = 'Your Order Has Been Shipped';
        $email = $user_data->email;
        $description = "Track Your Shipment on ".$transport_data->t_name." And Contact Number is :".$transport_data->t_contact;
        $this->email->to($email);
        $this->email->from('nehalp038@gmail.com','MyWebsite');
        $message = $description;
        $this->email->subject($sub);
        $this->email->message($message);
        $this->email->send();
        redirect("admin/show_order");
    }



    // for size:

    public function add_size()
    {
        $data['operation'] = 'insert';
        $this->load->view('admin/size_form', $data);
    }

    public function insert_size()
    {
        $data['size_name'] = $this->input->post('size_name');
        $this->size_model->insert_size($data);
        redirect('admin/show_size');
    }

    public function show_size()
    {
        $data['size_data'] = $this->size_model->showsize_data();
        $this->load->view('Admin/size_table', $data);

    }

    public function edit_size($id)
    {
        $data['operation'] = 'update';
        $data['size_data'] = $this->size_model->size_data($id);
        $this->load->view('admin/size_form', $data);
    }

    public function update_size($id)
    {
        $data['size_name'] = $this->input->post('size_name');

        $this->size_model->update_size($id, $data);
        redirect('admin/show_size');
    }

    public function delete_size($id)
    {
        $this->size_model->delete_size($id);
        redirect('admin/show_size');
    }

    // for colour:

    public function add_colour()
    {
        $data['operation'] = 'insert';
        $this->load->view('admin/colour_form', $data);
    }

    public function insert_colour()
    {
        $data['colour_name'] = $this->input->post('colour_name');
        $this->colour_model->insert_colour($data);
        redirect('admin/show_colour');
    }

    public function show_colour()
    {
        $data['colour_data'] = $this->colour_model->showcolour_data();
        $this->load->view('Admin/colour_table', $data);

    }

    public function edit_colour($id)
    {
        $data['operation'] = 'update';
        $data['colour_data'] = $this->colour_model->colour_data($id);
        $this->load->view('admin/colour_form', $data);
    }

    public function update_colour($id)
    {
        $data['colour_name'] = $this->input->post('colour_name');

        $this->colour_model->update_colour($id, $data);
        redirect('admin/show_colour');
    }

    public function delete_colour($id)
    {
        $this->colour_model->delete_colour($id);
        redirect('admin/show_colour');
    }

    // for extra_charge:

    public function add_extra_charge()
    {
        $data['operation'] = 'insert';
        $this->load->view('admin/extra_charge_form', $data);
    }

    public function insert_extra_charge()
    {
        $data['ec_name'] = $this->input->post('ec_name');
        $data['amount'] = $this->input->post('amount');
        $this->extra_charge_model->insert_extra_charge($data);
        redirect('admin/show_extra_charge');
    }

    public function show_extra_charge()
    {
        $data['extra_charge_data'] = $this->extra_charge_model->showextra_charge_data();
        $this->load->view('Admin/extra_charge_table', $data);

    }

    public function edit_extra_charge($id)
    {
        $data['operation'] = 'update';
        $data['extra_charge_data'] = $this->extra_charge_model->extra_charge_data($id);
        $this->load->view('admin/extra_charge_form', $data);
    }

    public function update_extra_charge($id)
    {
        $data['ec_name'] = $this->input->post('ec_name');
        $data['amount'] = $this->input->post('amount');

        $this->extra_charge_model->update_extra_charge($id, $data);
        redirect('admin/show_extra_charge');
    }

    public function delete_extra_charge($id)
    {
        $this->extra_charge_model->delete_extra_charge($id);
        redirect('admin/show_extra_charge');
    }

    // for  product_master:

        //region Photo upload
    public function do_sale_upload($id)
    {
        $type = explode('.', $_FILES["sale_image"]["name"]);
        $type = strtolower($type[count($type) - 1]);
        $name = explode(' ', $id);
        $url = "upload/sale/" . 'IMG_sale_' . $name[0] . '_' . $name[1] . '.' . $type;
        if (in_array($type, array("jpg", "jpeg", "gif", "png"))) {
            if (is_uploaded_file($_FILES["sale_image"]["tmp_name"])) {
                if (move_uploaded_file($_FILES["sale_image"]["tmp_name"], $url)) {
                    return $url;
                }
            }
        }

        return "";
    }

    public function do_multi_upload($id)
    {
        $count = count($this->product_image_model->find_product_image_data($id));
        $j = $count;
        // echo $count;
        // echo $id;die;
        if (count($_FILES["file"]['name']) > 0) {
            //echo count($_FILES["file"]['name']);die;
            for ($i = 0; $i < count($_FILES["file"]['name']); $i++) {
                $type = explode('.', $_FILES["file"]["name"][$i]);
                $type = end($type);
                $j++;

                $url = "upload/product/" . 'IMG_PROD_' . $id . '_' . $j . '.' . $type;

                //  echo $url;die;

                if (in_array($type, array("jpg", "jpeg", "gif", "png"))) {
                    //echo "in_array";die;
                    if (is_uploaded_file($_FILES["file"]["tmp_name"][$i])) {
                        // echo "is_upload";die;
                        if (move_uploaded_file($_FILES["file"]["tmp_name"][$i], $url)) {
                            // echo "move";die;
                            $da['p_id_fk'] = $id;
                            $da['pi_name'] = $url;

                            $this->product_image_model->insert_product_image($da);
                        } else {
                            echo "move else";
                        }
                    } else {
                        echo "is_else";
                    }
                } else {
                    echo "in_else";
                }
            }
            //  return;
        }
    }
    //endregion

    public function gallery($id)
    {
        $data['product_image'] = $this->product_image_model->find_product_image_data($id);
        $data['product_data'] = $this->product_master_model->product_master_data($id);
        $this->load->view('admin/product_image_form', $data);
    }
    public function insert_product_image($id)
    {
        $this->do_multi_upload($id);
        redirect('admin/gallery/' . $id);
    }
    public function delete_product_image($id, $pid)
    {
        $data = $this->product_image_model->product_single_photo($id);
        unlink($data);
        $this->product_image_model->delete_product_image($id);
        redirect('admin/gallery/' . $pid);
    }

    public function add_product_master()
    {
        $data['operation'] = 'insert';
        $data['type'] = 'all';
        $data['size_data'] = $this->size_model->showsize_data();
        $data['colour_data'] = $this->colour_model->showcolour_data();
        $data['material_data'] = $this->material_model->showmaterial_data();
        $data['product_type_data'] = $this->product_type_model->showproduct_type_data();
        $this->load->view('admin/product_master_form', $data);
    }

    public function change_quantity($id)
    {
        $data['id'] = $id;
        $data['operation'] = 'update';
        $data['type'] = 'quantity';
        $data['size_data'] = $this->size_model->showsize_data();
        $data['product_master_data'] = $this->product_master_model->product_master_data($id);
        $this->load->view('admin/product_master_form', $data);
    }

    public function update_quantity_master($id)
    {
        $allsize = $this->size_model->showsize_data();

        foreach ($allsize as $key => $row) {
            $data1[$row->size_id_pk] = $this->input->post($row->size_name);
        }
        $qty = $this->product_quantity_master_model->product_quantity_data($id);
        if ($qty != null) {
            $this->product_quantity_master_model->update_product_quantity_master($id, $data1);
        } else {
            $this->product_quantity_master_model->insert_product_quantity_master($id, $data1);
        }
        redirect('admin/show_product_master');
    }

    public function insert_product_master()
    {
        $data['p_name'] = $this->input->post('p_name');
        $data['colour_id_fk'] = $this->input->post('colour_name');
        $data['m_id_fk'] = $this->input->post('m_name');
        $data['pt_id_fk'] = $this->input->post('pt_name');
        $data['price'] = $this->input->post('price');
        $data['description'] = $this->input->post('description');

        $allsize = $this->size_model->showsize_data();

        foreach ($allsize as $key => $row) {
            $data1[$row->size_id_pk] = $this->input->post($row->size_name);
        }

        $id = $this->product_master_model->insert_product_master($data, $data1);
        $this->do_multi_upload($id);

        redirect('admin/show_product_master');
    }

    public function show_product_master()
    {
        $data['product_master_data'] = $this->product_master_model->showproduct_master_data();
        $this->load->view('Admin/product_master_table', $data);

    }

    public function edit_product_master($id)
    {
        $data['operation'] = 'update';
        $data['type'] = 'product';
        $data['colour_data'] = $this->colour_model->showcolour_data();
        $data['material_data'] = $this->material_model->showmaterial_data();
        $data['product_type_data'] = $this->product_type_model->showproduct_type_data();
        $data['product_master_data'] = $this->product_master_model->product_master_data($id);
        $this->load->view('admin/product_master_form', $data);
    }

    public function update_product_master($id)
    {
        $data['p_name'] = $this->input->post('p_name');
        $data['colour_id_fk'] = $this->input->post('colour_name');
        $data['m_id_fk'] = $this->input->post('m_name');
        $data['pt_id_fk'] = $this->input->post('pt_name');
        $data['price'] = $this->input->post('price');
        $data['description'] = $this->input->post('description');

        $this->product_master_model->update_product_master($id, $data);
        redirect('admin/show_product_master');
    }

    public function delete_product_master($id)
    {
        $this->product_master_model->delete_product_master($id);
        redirect('admin/show_product_master');
    }

    // for material:

    public function add_material()
    {
        $data['operation'] = 'insert';
        $this->load->view('admin/material_form', $data);
    }

    public function insert_material()
    {
        $data['m_name'] = $this->input->post('m_name');
        $this->material_model->insert_material($data);
        redirect('admin/show_material');
    }

    public function show_material()
    {
        $data['material_data'] = $this->material_model->showmaterial_data();
        $this->load->view('admin/material_table', $data);

    }

    public function edit_material($id)
    {
        $data['operation'] = 'update';
        $data['material_data'] = $this->material_model->material_data($id);
        $this->load->view('admin/material_form', $data);
    }

    public function update_material($id)
    {
        $data['m_name'] = $this->input->post('m_name');
        $this->material_model->update_material($id, $data);
        redirect('admin/show_material');
    }

    public function delete_material($id)
    {
        $this->material_model->delete_material($id);
        redirect('admin/show_material');
    }

    // for coupon:

    public function add_coupon()
    {
        $data['operation'] = 'insert';
        $this->load->view('admin/coupon_form', $data);
    }

    public function insert_coupon()
    {
        $data['coupon_name'] = $this->input->post('coupon_name');
        $data['discount'] = $this->input->post('discount');
        $data['upto'] = $this->input->post('upto');
        $this->coupon_model->insert_coupon($data);
        redirect('admin/show_coupon');
    }

    public function show_coupon()
    {
        $data['coupon_data'] = $this->coupon_model->showcoupon_data();
        $this->load->view('admin/coupon_table', $data);

    }

    public function edit_coupon($id)
    {
        $data['operation'] = 'update';
        $data['coupon_data'] = $this->coupon_model->coupon_data($id);
        $this->load->view('admin/coupon_form', $data);
    }

    public function update_coupon($id)
    {
        $data['coupon_name'] = $this->input->post('coupon_name');
        $data['discount'] = $this->input->post('discount');
        $data['upto'] = $this->input->post('upto');
        $this->coupon_model->update_coupon($id, $data);
        redirect('admin/show_coupon');
    }

    public function delete_coupon($id)
    {
        $this->coupon_model->delete_coupon($id);
        redirect('admin/show_coupon');
    }

    // for product_type:

    public function add_product_type()
    {
        $data['operation'] = 'insert';
        $this->load->view('admin/product_type_form', $data);
    }

    public function insert_product_type()
    {
        $data['pt_name'] = $this->input->post('pt_name');
        $this->product_type_model->insert_product_type($data);
        redirect('admin/show_product_type');
    }

    public function show_product_type()
    {
        $data['product_type_data'] = $this->product_type_model->showproduct_type_data();
        $this->load->view('Admin/product_type_table', $data);

    }

    public function edit_product_type($id)
    {
        $data['operation'] = 'update';
        $data['product_type_data'] = $this->product_type_model->product_type_data($id);
        $this->load->view('admin/product_type_form', $data);
    }

    public function update_product_type($id)
    {
        $data['pt_name'] = $this->input->post('pt_name');

        $this->product_type_model->update_product_type($id, $data);
        redirect('admin/show_product_type');
    }

    public function delete_product_type($id)
    {
        $this->product_type_model->delete_product_type($id);
        redirect('admin/show_product_type');
    }

    // for sale:

    public function add_sale()
    {
        $data['operation'] = 'insert';
        $this->load->view('admin/sale_form', $data);
    }

    public function insert_sale()
    {
        $data['sale_name'] = $this->input->post('sale_name');
        $data['sale_image'] = $this->do_sale_upload($data['sale_name']);
        $data['starting_date'] = $this->input->post('starting_date');
        $data['duration'] = $this->input->post('duration');
        $this->sale_model->insert_sale($data);
        redirect('admin/show_sale');
    }

    public function show_sale()
    {
        $data['sale_data'] = $this->sale_model->showsale_data();
        $this->load->view('admin/sale_table', $data);

    }

    public function edit_sale($id)
    {
        $data['operation'] = 'update';
        $data['sale_data'] = $this->sale_model->sale_data($id);
        $this->load->view('admin/sale_form', $data);
    }

    public function update_sale($id)
    {
        $data['sale_name'] = $this->input->post('sale_name');
        if ($_FILES['sale_image']['name'] != null) {
            $data['sale_image'] = $this->do_sale_upload($data['sale_name']);
        } else {
            $data['sale_image'] = $this->input->post('image_sale');
        }

        $data['starting_date'] = $this->input->post('starting_date');
        $data['duration'] = $this->input->post('duration');
        $this->sale_model->update_sale($id, $data);
        redirect('admin/show_sale');
    }

    public function delete_sale($id)
    {
        $this->sale_model->delete_sale($id);
        redirect('admin/show_sale');
    }

    // for sale_category:

    public function add_sale_category()
    {
        $data['operation'] = 'insert';
        $this->load->view('admin/sale_category_form', $data);
    }

    public function insert_sale_category()
    {
        $data['sale_c_name'] = $this->input->post('sale_c_name');
        $data['discount'] = $this->input->post('discount');
        $data['amount'] = $this->input->post('amount');
        $this->sale_category_model->insert_sale_category($data);
        redirect('admin/show_sale_category');
    }

    public function show_sale_category()
    {
        $data['sale_category_data'] = $this->sale_category_model->showsale_category_data();
        $this->load->view('admin/sale_category_table', $data);

    }

    public function edit_sale_category($id)
    {
        $data['operation'] = 'update';
        $data['sale_category_data'] = $this->sale_category_model->sale_category_data($id);
        $this->load->view('admin/sale_category_form', $data);
    }

    public function update_sale_category($id)
    {
        $data['sale_c_name'] = $this->input->post('sale_c_name');
        $data['discount'] = $this->input->post('discount');
        $data['amount'] = $this->input->post('amount');
        $this->sale_category_model->update_sale_category($id, $data);
        redirect('admin/show_sale_category');
    }

    public function delete_sale_category($id)
    {
        $this->sale_category_model->delete_sale_category($id);
        redirect('admin/show_sale_category');
    }

    // sale product:

    public function add_sale_product()
    {
        $data['operation'] = 'insert';
        $data['product_data'] = $this->product_master_model->showproduct_master_data();
        $data['sale_data'] = $this->sale_model->showsale_data();
        $data['sale_category_data'] = $this->sale_category_model->showsale_category_data();
        $this->load->view('admin/sale_product_form', $data);
    }

    public function insert_sale_product()
    {
        $data['p_id_fk'] = $this->input->post('p_name');
        $data['sale_id_fk'] = $this->input->post('sale_name');
        $data['sale_c_id_fk'] = $this->input->post('sale_c_name');
        $this->sale_product_model->insert_sale_product($data);
        redirect('admin/show_sale_product');
    }

    public function show_sale_product()
    {
        $data['sale_product_data'] = $this->sale_product_model->showsale_product_data();
        $this->load->view('admin/sale_product_table', $data);

    }

    public function edit_sale_product($id)
    {
        $data['operation'] = 'update';
        $data['product_data'] = $this->product_master_model->showproduct_master_data();
        $data['sale_data'] = $this->sale_model->showsale_data();
        $data['sale_category_data'] = $this->sale_category_model->showsale_category_data();
        $data['sale_product_data'] = $this->sale_product_model->sale_product_data($id);
        $this->load->view('admin/sale_product_form', $data);
    }

    public function update_sale_product($id)
    {
        $data['p_id_fk'] = $this->input->post('p_name');
        $data['sale_id_fk'] = $this->input->post('sale_name');
        $data['sale_c_id_fk'] = $this->input->post('sale_c_name');
        //print_r($data); die;
        $this->sale_product_model->update_sale_product($id, $data);
        redirect('admin/show_sale_product');
    }

    public function delete_sale_product($id)
    {
        $this->sale_product_model->delete_sale_product($id);
        redirect('admin/show_sale_product');
    }

}
