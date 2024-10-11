<?php

class order_product_master_model extends CI_Model
{
    public function insert_order_product_master($data){

        $this->db->insert('order_product_master',$data);
        return $this->db->insert_id();
        

    }

    public function showorder_product_master_data(){
        $query = $this->db->get('order_product_master');
        return $query->result();

    }

    public function order_product_master_data($id){
        $querry = $this ->db->get_where('order_product_master',array('o_id_fk'=>$id));
        return $querry->result();
    }

    public function update_order_product_master($id,$data){
         $this ->db->where('o_p_id',$id);
         $this->db->update('order_product_master',$data);

        }
        public function delete_order_product_master($id){
            $this ->db->where('o_p_id',$id);
            $this->db->delete('order_product_master');
        }
    }
