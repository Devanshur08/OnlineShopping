<?php

class product_image_model extends CI_Model
{
    public function insert_product_image($data){
        $this->db->insert('product_image',$data);
        return $this->db->insert_id();
    }

    public function showproduct_image_data(){
        $this->db->select('pi.*,p.p_name');
        $this->db->where('pi.is_active',1);
        $this->db->from('product_image pi');
        $this->db->join('product p','p.p_id_fk=pi.pi_id_pk');
        $query = $this->db->get();
        return $query->result();
    }

    public function find_product_image_data($id){
        $querry = $this ->db->get_where('product_image',array('p_id_fk'=>$id,'is_active'=>1));
        return $querry->result_array();
    }

    public function product_image_data($id){
        $querry = $this ->db->get_where('product_image',array('pi_id_pk'=>$id,'is_active'=>1));
        return $querry->row();
    }

    public function product_single_photo($id){
        $querry = $this ->db->get_where('product_image',array('pi_id_pk'=>$id,'is_active'=>1));
        return $querry->row('pi_name');
    }


    public function update_product_image($id,$data){
         $this ->db->where('pi_id_pk',$id);
         $this->db->set('modified_on','NOW()',false);
         $this->db->update('product_image',$data);

        }
        public function delete_product_image($id){
            $this ->db->where('pi_id_pk',$id);
            $this->db->set('modified_on','NOW()',false);
            $this->db->set('is_active',0);
            $this->db->update('product_image');
        }
    }
