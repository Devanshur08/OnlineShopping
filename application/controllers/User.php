<?php

class user extends CI_controller
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

    public function index()
    {
    $data['product_type'] = $this->product_type_model->showproduct_type_data();

    $data['new_product_arrival'] = $this->product_master_model->new_product_arrival();
    $this->load->view('user/index_form',$data);
    }


    //Login / Register
    public function login_register()
    {
        $data['product_type'] = $this->product_type_model->showproduct_type_data();
        $this->load->view('user/login_register_form',$data);

    }

    public function register()
    {
        $data['u_name']=$this->input->post('u_name');
        $data['contact']=$this->input->post('contact');
        $data['email']=$this->input->post('email');
        $data['password']=$this->input->post('password');
        $data['u_type']="client";

        $id = $this->user_master_model->insert_user_master($data);
        $_SESSION['is_register'] = $id;
        redirect('user/login_register');
    }

    public function login()
    {
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $data = $this->user_master_model->user_master_oath_data($email,$password,'client');
        if($data != null){
            $_SESSION['u_id'] = $data->u_id_pk;
            $_SESSION['u_name'] = $data->u_name;
            $cart = $this->cart_model->user_cart_data($data->u_id_pk);
            if($cart == null)
            {
                $data1['u_id_fk'] = $data->u_id_pk;
                $data1['total_amount'] = 0;
                $cart_id = $this->cart_model->insert_cart($data1);
                $_SESSION['cart_id'] = $cart_id;

            }
            else
            {
                $_SESSION['cart_id'] = $cart->cart_id_pk;
            }
        }
        redirect('user/index');
    }

    public function logout()
    {
        unset($_SESSION['u_id']);
        unset($_SESSION['u_name']);
        unset($_SESSION['cart_id']);
        redirect('user/index');
    }

    public function contact()
    {
        $data['product_type'] = $this->product_type_model->showproduct_type_data();
        $this->load->view('user/contact_form',$data);
    }

    public function about_us()
    {
        $data['product_type'] = $this->product_type_model->showproduct_type_data();
        $this->load->view('user/about_us_form',$data);
    }

    public function shop()
    {
        $data['product_type'] = $this->product_type_model->showproduct_type_data();
        $this->load->view('user/shop_form',$data);
    }

    public function my_account($id)
    {
        $data['product_type'] = $this->product_type_model->showproduct_type_data();
        $data['user_data'] = $this->user_master_model->user_master_data($id);
        $this->load->view('user/my_account_form',$data);
    }

    public function contact_us(){
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['title'] = $this->input->post('title');
        $data['description'] = $this->input->post('description');

        $this->contact_model->insert_contact($data);
        redirect('user/contact');
    }

    //Product

    public function product_list($id)
    {
        $data['product_type'] = $this->product_type_model->showproduct_type_data();
        $data['product_master'] = $this->product_master_model->showproduct_type_data($id);

        $this->load->view('user/product_list_form',$data);
    }

    public function offer_product($id)
    {
        $data['product_type'] = $this->product_type_model->showproduct_type_data();
        $data['product_master'] = $this->sale_product_model->sale_all_product_data($id);

        $this->load->view('user/product_list_form',$data);
    }

    public function single_product($id)
    {
        $data['product_type'] = $this->product_type_model->showproduct_type_data();
        $data['single_product'] = $this->product_master_model->showsingle_product_data($id);
        $data['size_data'] = $this->size_model->showsize_data();
        $data['review_data'] = $this->review_model->product_review_data($id);

        $data['review_count'] = $this->review_model->product_review_count($id);

        $this->load->view('user/single_product_form',$data);
    }

    public function add_product_review($id){
            $data['u_id_fk'] = $_SESSION['u_id'];
            $data['p_id_fk'] = $id;
            $data['description'] = $this->input->post('description');
            $data['rating'] = $this->input->post('rating');
            $this->review_model->insert_review($data);
            redirect('user/single_product/'.$id);
    }

    //Cart

    public function view_cart()
    {
        if (isset( $_SESSION['cart_id']))
        {
            $data['product_type'] = $this->product_type_model->showproduct_type_data();
            $data['cart_product'] = $this->cart_model->cart_product($_SESSION['cart_id']);
            $data['cart_data'] = $this->cart_model->checkcart_id($_SESSION['cart_id']);
            // print_r($data['product_type']);
            // echo "<br />";
            // print_r($data['cart_product']);
            // echo "<br />";
            // print_r($data['cart_data']);die;
           // print_r($data);die;
            if($data['cart_product'] == null){
                $data1['total_amount'] = 0;
                $this->cart_model->update_cart($_SESSION['cart_id'],$data1);
            }
            $this->load->view('user/view_cart_form',$data);

        }
        else
        {
            redirect('user/login_register');
        }
    }

    public function order_product($id)
    {
            $data['product_type'] = $this->product_type_model->showproduct_type_data();
            $data['cart_product'] = $this->order_product_master_model->order_product_master_data($id);
            $this->load->view('user/order_product',$data);
    }


    public function checkout_cart()
    {
        if (isset($_SESSION['cart_id']))
        {
            $data['address_data'] = $this->address_master_model->user_default_address_data();
            $data['product_type'] = $this->product_type_model->showproduct_type_data();
            $data['cart_product'] = $this->cart_model->cart_product($_SESSION['cart_id']);
            $data['cart_data'] = $this->cart_model->cart_data($_SESSION['cart_id']);
            $data['paage_type'] = 'checkout_cart';
            $this->load->view('user/checkout_cart_form',$data);
        }
        else
        {
            redirect('user/login');
        }
    }

    public function add_product_cart($id)
    {
        if (isset ($_SESSION['cart_id']))
        {
            $res = $this->cart_model->checkcart($_SESSION['u_id']);
            if($res != null)
            {
                $_SESSION['cart_id'] = $res->cart_id_pk;
            }
            $total_amount = $res->total_amount;
            $product_data = $this->cart_model->checkcart_product_data($id,$this->input->post('size_id_fk'));
            if($product_data != null){


                    $updatedata['cart_quantity'] = $product_data->cart_quantity+$this->input->post('textquantity');
                    $product_price = $product_data->cart_price / $product_data->cart_quantity;
                    $updatedata['cart_price'] = $product_price * $updatedata['cart_quantity'];
                    //print_r($product_data);print_r($updatedata);die;
                    $this->cart_model->update_cart_product($product_data->cart_p_id_pk,$updatedata);

                        $quantity = $updatedata['cart_quantity']-$product_data->cart_quantity;
                        $price = $product_price * $quantity;
                        $cdata['total_amount'] = $total_amount+$price;
                        $cdata['discounted_price'] = $total_amount+$price;
                        $this->cart_model->update_cart($_SESSION['cart_id'],$cdata);

            }else{
            $data['cart_id_fk'] = $_SESSION['cart_id'];
            $data['p_id_fk'] = $id;
            $data['cart_quantity'] = $this->input->post('textquantity');
            $data['size_id_fk'] = $this->input->post('size_id_fk');
            $price = $this->input->post('price');
            $data['cart_price'] = $data['cart_quantity'] * $price;
            $cdata['total_amount'] = $data['cart_price'] + $res->total_amount;
            $cdata['discounted_price'] = $total_amount+$price;

            $this->cart_model->add_to_cart($data,$cdata,$_SESSION['cart_id']);
            }
            redirect('user/view_cart');
        }
        else
        {
            $data['id'] = $id;
            $data['msg'] = "Please Login First To Add Product To Cart";
            redirect('user/login_register');
        }
    }


    public function delete_cart_product($p_id)
    {
        $cart = $this->cart_model->checkcart_id($_SESSION['cart_id']);
        $cart_product = $this->cart_model->checkcart_product($p_id);
        $total_amount = $cart->total_amount;
        $cart_price = $cart_product->cart_price;
        $data['total_amount'] = $total_amount - $cart_price;

        $this->cart_model->update_cart($_SESSION['cart_id'],$data);


        $this->applycoupon($cart->coupon_code, $data['total_amount']);
        $this->cart_model->delete_cart_product($p_id);
        redirect('user/view_cart');
    }

    public function update_cart_product()
    {
        $cart = $this->cart_model->checkcart_id($_SESSION['cart_id']);
        $total_amount = $cart->total_amount;

        $allpost = $this->input->post();

//print_r($allpost);die;
        if($allpost['update_cart'] == 'Update cart' && count($allpost['id'])>0 ){


         //print_r($allpost);die;
            foreach($allpost['id'] as $row){
                $id = $row;
               // echo $id;die;
                if($allpost[$id.'_quantity'] != $allpost[$id.'_old_quantity']){

                    $updatedata['cart_quantity'] = $allpost[$id.'_quantity'];
                    $product_price = $allpost[$id.'_total_price'] / $allpost[$id.'_old_quantity'];
                    $updatedata['cart_price'] = $product_price * $updatedata['cart_quantity'];
                    //print_r($updatedata);die;
                    $this->cart_model->update_cart_product($id,$updatedata);

                        if($allpost[$id.'_quantity'] < $allpost[$id.'_old_quantity']){
                        $quantity = $allpost[$id.'_old_quantity'] - $allpost[$id.'_quantity'];
                        $price = $product_price * $quantity;
                        $cdata['total_amount'] = $total_amount-$price;
                        $total_amount-=$price;
                        }
                        else{
                        $quantity = $allpost[$id.'_quantity'] - $allpost[$id.'_old_quantity'];
                        $price = $product_price * $quantity;
                        $cdata['total_amount'] = $total_amount+$price;
                        $total_amount+=$price;
                        }
                        //print_r($cdata);die;
                        $this->cart_model->update_cart($_SESSION['cart_id'],$cdata);
//echo $cart->coupon_code;die;
                        $this->applycoupon($cart->coupon_code, $cdata['total_amount']);
                }
            }
        }
        if($allpost['apply_coupon'] == 'Apply coupon'){
             $this->applycoupon($allpost['coupon_code'],$allpost['cart_total_price']);
        }


        redirect('user/view_cart');
    }

    public function applycoupon($coupon_code,$total_price){

        // $coupon_code = $this->input->post('coupon_code');
        // $total_price = $this->input->post('cart_total_price');

        $coupon_data = $this->coupon_model->coupon_code_data($coupon_code);

        if($coupon_data != null){
            if($total_price >= $coupon_data->upto){
                $discount = round(($total_price * $coupon_data->discount)/100);
                $newprice = $total_price - $discount;

                $cdata['discount'] = $discount;
                $cdata['discounted_price'] = $newprice;
                $cdata['coupon_code'] = $coupon_code;
               //print_r($cdata);die;
                $this->cart_model->update_cart($_SESSION['cart_id'],$cdata);
                $_SESSION['coupon_code'] = $coupon_code;
                $_SESSION['coupon_status'] = 'success';
               // $_SESSION['coupon_discount'] = $discount;
               // $_SESSION['coupon_total'] = $total_price;
                $_SESSION['coupon_message'] = 'Coupon Code Applied.';
            }else{
                $_SESSION['coupon_status'] = 'failure';
                $_SESSION['coupon_message'] = 'You are not eligible for this offer as your total is less than ₹'.$coupon_data->upto;
                $cdata['discount'] = 0;
                $cdata['discounted_price'] = $total_price;
                $cdata['coupon_code'] = $coupon_code;
               //print_r($cdata);die;
                $this->cart_model->update_cart($_SESSION['cart_id'],$cdata);
            }
        }else{
            $_SESSION['coupon_status'] = 'failure';
            $_SESSION['coupon_message'] = 'Enter Valid Coupon Code.';
        }

    }


    public function place_order(){
        if($this->input->post('is_default') == 0){
        $data['is_default'] = 1;
        $data['user_id_fk'] = $_SESSION['u_id'];
        $data['first_name'] = $this->input->post('user_name');
        $data['email'] = $this->input->post('user_email');
        $data['street_address'] = $this->input->post('user_address');
        $data['city'] = $this->input->post('user_city');
        $data['state'] = $this->input->post('user_state');
        $data['postcode'] = $this->input->post('user_pincode');
        $data['phone_number'] = $this->input->post('user_phoneno');
         $id = $this->address_master_model->insert_address($data);
        }else{
            $id = $_SESSION['address_id'];
        }

        $todaydatee = date("y-m-d");
        $data1['added_on'] = $todaydatee;
        $data1['u_id_fk'] = $_SESSION['u_id'];
        $data1['address_id_fk'] = $id;
        $data1['total_price'] = $this->input->post('total');
        $daid = $this->order_product_model->insert_order_product($data1);

        $cartprod = $this->cart_model->cart_product($_SESSION['cart_id']);
        $odata['o_id_fk'] = $daid;
        foreach ($cartprod as $val) {
            $odata['p_id_fk'] = $val->p_id_fk;
            $odata['size_id_fk'] = $val->size_id_fk;
            $odata['quantity'] = $val->cart_quantity;
            $odata['net_price'] = $val->cart_price;
            $this->order_product_master_model->insert_order_product_master($odata);

            $updata = $this->product_quantity_master_model->getquantityy($odata);
            $tupdata['quantity'] = $updata['quantity'] - $odata['quantity'];


            $tuid = $updata['p_q_id_pk'];
            $this->product_quantity_master_model->updateindqty($tuid, $tupdata);
        }

        $ctdata['total_amount'] = '0';
        $this->cart_product_master_model->deletefromcart($_SESSION['cart_id']);
        $this->cart_model->update_cart($_SESSION['cart_id'],$ctdata);

        $sub = 'Your Order is Placed';
        $email = $this->input->post('email');
        $description = " To View Invoice and Billing Details Click On The Link Below";
        $this->email->to($email);
        $this->email->from('nehalp038@gmail.com','MyWebsite');
        $message = $description;
        $this->email->subject($sub);
        $this->email->message($message . anchor(base_url() . 'user/invoice/' . $daid));
        $this->email->send();
        $data2['product_type'] = $this->product_type_model->showproduct_type_data();
        $this->load->view('user/thankyou',$data2);
    }


    public function invoice($daid){
        $data['order_info'] = $this->order_product_model->order_product_data($daid);
        $data['order_product'] = $this->order_product_master_model->order_product_master_data($daid);
        $this->load->view('user/invoice',$data);
    }


    //Addresss

    public function new_address($type){
        $data['operation']= 'insert';
        $data['type'] = $type;
        $data['product_type'] = $this->product_type_model->showproduct_type_data();
        $this->load->view('user/addresses_form',$data);
    }

    public function insert_address($type){
        $data['user_id_fk'] = $_SESSION['u_id'];
        $data['first_name'] = $this->input->post('user_name');
        $data['email'] = $this->input->post('user_email');
        $data['street_address'] = $this->input->post('user_address');
        $data['city'] = $this->input->post('user_city');
        $data['state'] = $this->input->post('user_state');
        $data['postcode'] = $this->input->post('user_pincode');
        $data['phone_number'] = $this->input->post('user_phoneno');
        $this->address_master_model->insert_address($data);
        if($type == 'dashboard'){
        redirect('user/my_account/'.$_SESSION['u_id']);
        }
        if ($type == 'cart'){
            redirect('user/checkout_cart');
        }
    }

    public function edit_address($id)
    {
     $data['operation']='update';
     $data['address_data']=$this->address_master_model->address_master_data($id);
     $this->load->view('user/addresses_form',$data);
    }


    public function update_address($id){
        $data['user_id_fk'] = $_SESSION['u_id'];
        $data['first_name'] = $this->input->post('user_name');
        $data['email'] = $this->input->post('user_email');
        $data['street_address'] = $this->input->post('user_address');
        $data['city'] = $this->input->post('user_city');
        $data['state'] = $this->input->post('user_state');
        $data['postcode'] = $this->input->post('user_pincode');
        $data['phone_number'] = $this->input->post('user_phoneno');
        $this->address_master_model->update_address_master($id,$data);
        redirect('user/my_account/'.$_SESSION['u_id']);
    }

    public function update_profile($id){
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['contact'] = $this->input->post('contact');
        $this->user_master_model->update_user_master($id,$data);
        redirect('user/my_account/'.$_SESSION['u_id']);
    }

    public function update_password($id){
        if($this->input->post('password') == $this->input->post('password_confirm')){
        $data['password'] = $this->input->post('password');
        $this->user_master_model->update_user_master($id,$data);
        }
        redirect('user/my_account/'.$_SESSION['u_id']);
    }

    public function default_address($id){
        $address_data = $this->address_master_model->user_address_data($_SESSION['u_id']);

            if($address_data != null){
                foreach($address_data as $row){
                    $data1['is_default'] = 0;
                    $this->address_master_model->update_address_master($row->add_master_id_pk,$data1);
                }
            }

            $data['is_default'] = 1;
            $this->address_master_model->update_address_master($id,$data);


        redirect('user/my_account/'.$_SESSION['u_id']);
    }

    public function delete_address($id)
    {
       $this->address_master_model->delete_address_master($id);
       redirect('user/my_account/'.$_SESSION['u_id']);
    }

    //Wishlist

    public function add_to_wishlist($id){
        $data['p_id_fk'] = $id;
        $data['u_id_fk'] = $_SESSION['u_id'];
        $this->wishlist_model->insert_wishlist($data);
        redirect('user/my_account/'.$_SESSION['u_id']);
    }

    public function delete_wishlist($id){
        $this->wishlist_model->delete_product_wishlist($id);
        redirect('user/my_account/'.$_SESSION['u_id']);
    }

}

