<?php

class product_type_model extends CI_Model
{
    public function insert_product_type($data)
    {

        $this->db->insert('product_type',$data);
        return $this->db->insert_id();
        

    }

    public function showproduct_type_data()
    {
        $query = $this->db->get_where('product_type',array('is_active'=>1));
        return $query->result();

    }

    public function product_type_data($id)
    {
        $querry = $this ->db->get_where('product_type',array('pt_id_pk'=>$id,'is_active'=>1));
        return $querry->row();
    }

    public function update_product_type($id,$data)
    {
        $this ->db->where('pt_id_pk',$id);
        $this->db->set('modified_on','NOW()',false);
        $this->db->update('product_type',$data);

    }
    
    public function delete_product_type($id)
    {
        $this ->db->where('pt_id_pk',$id);
        $this->db->set('modified_on','NOW()',false);
        $this->db->set('is_active',0);
        $this->db->update('product_type');
    }
}
