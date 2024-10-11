<?php

class sale_model extends CI_Model
{
    public function insert_sale($data)
    {

        $this->db->insert('sale',$data);
        return $this->db->insert_id();
        

    }

    public function showsale_data()
    {
        $query = $this->db->get_where('sale',array('is_active'=>1));
        return $query->result();

    }

    public function sale_data($id)
    {
        $querry = $this ->db->get_where('sale',array('sale_id_pk'=>$id,'is_active'=>1));
        return $querry->row();
    }

    public function update_sale($id,$data)
    {
         $this ->db->where('sale_id_pk',$id);
         $this->db->set('modified_on','NOW()',false);
         $this->db->update('sale',$data);

    }
    public function delete_sale($id)
    {
        $this ->db->where('sale_id_pk',$id);
        $this->db->set('modified_on','NOW()',false);
        $this->db->set('is_active',0);
        $this->db->update('sale');
    }
}