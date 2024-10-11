<?php

class cart_product_master_model extends CI_Model
{
    public function insert_cart_product_master($data){

        $this->db->insert('cart_product_master',$data);
        return $this->db->insert_id();
        

    }

    public function showcart_product_master_data(){
        $query = $this->db->get('cart_product_master');
        return $query->result();

    }

    public function cart_product_master_data($id){
        $querry = $this ->db->get_where('cart_product_master',array('cart_p_id_pk'=>$id));
        return $querry->row();
    }

    public function update_cart_product_master($id,$data){
         $this ->db->where('cart_p_id_pk',$id);
         $this->db->update('cart_product_master',$data);

        }
        public function delete_cart_product_master($id){
            $this ->db->where('cart_p_id_pk',$id);
            $this->db->delete('cart_product_master');
        }

        public function deletefromcart($id){
            $this ->db->where('cart_id_fk',$id);
            $this->db->delete('cart_product_master');
        }
}
