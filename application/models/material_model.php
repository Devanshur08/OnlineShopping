<?php

class material_model extends CI_Model
{
    public function insert_material($data)
    {

        $this->db->insert('material',$data);
        return $this->db->insert_id();
        

    }

    public function showmaterial_data()
    {
        $query = $this->db->get_where('material',array('is_active'=>1));
        return $query->result();

    }

    public function material_data($id)
    {
        $querry = $this ->db->get_where('material',array('m_id_pk'=>$id,'is_active'=>1));
        return $querry->row();
    }

    public function update_material($id,$data)
    {
         $this ->db->where('m_id_pk',$id);
         $this->db->set('modified_on','NOW()',false);
         $this->db->update('material',$data);

    }
    public function delete_material($id)
    {
        $this ->db->where('m_id_pk',$id);
        $this->db->set('modified_on','NOW()',false);
        $this->db->set('is_active',0);
        $this->db->update('material');
    }
}