<?php

class sale_category_model extends CI_Model
{
    public function insert_sale_category($data)
    {

        $this->db->insert('sale_category',$data);
        return $this->db->insert_id();
        

    }

    public function showsale_category_data()
    {
        $query = $this->db->get_where('sale_category',array('is_active'=>1));
        return $query->result();

    }

    public function sale_category_data($id)
    {
        $querry = $this ->db->get_where('sale_category',array('sale_c_id_pk'=>$id,'is_active'=>1));
        return $querry->row();
    }

    public function update_sale_category($id,$data)
    {
         $this ->db->where('sale_c_id_pk',$id);
         $this->db->set('modified_on','NOW()',false);
         $this->db->update('sale_category',$data);

    }
    public function delete_sale_category($id)
    {
        $this ->db->where('sale_c_id_pk',$id);
        $this->db->set('modified_on','NOW()',false);
        $this->db->set('is_active',0);
        $this->db->update('sale_category');
    }
}
