<?php

class address_master_model extends CI_Model
{
    public function insert_address($data)
    {
       $this->db->insert('address_master',$data);
       return $this->db->insert_id();
    }

    public function showaddress_master_data()
    {
        $query = $this->db->get('address_master');
        return $query->result();
    }

    public function address_master_data($id)
    {
        $querry = $this->db->get_where('address_master',array('add_master_id_pk'=>$id));
        return $querry->row();
    }

    public function user_address_data($id)
    {
        $querry = $this->db->get_where('address_master',array('user_id_fk'=>$id));
        return $querry->result();
    }

    public function user_default_address_data()
    {
        $querry = $this->db->get_where('address_master',array('user_id_fk'=>$_SESSION['u_id'],'is_default'=>'1'));
        return $querry->row();
    }

    
    public function update_address_master($id,$data)
    {
        $this->db->where('add_master_id_pk',$id);
        $this->db->set('modified_on','NOW()',false);
        $this->db->update('address_master',$data);
    }
        
    public function delete_address_master($id)
    {
        $this ->db->where('add_master_id_pk',$id);
        $this->db->delete('address_master');
    }
}
