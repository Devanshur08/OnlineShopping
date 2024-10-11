<?php

class user_master_model extends CI_Model
{
    public function insert_user_master($data)
    {
       $this->db->insert('user_master',$data);
       return $this->db->insert_id();
    }

    public function showuser_master_data()
    {
        $query = $this->db->get('user_master');
        return $query->result();
    }

    public function user_master_data($id)
    {
        $query = $this->db->get_where('user_master',array('u_id_pk'=>$id));
        return $query->row();
    }

    public function user_master_oath_data($email,$password,$type)
    {
        $query = $this->db->get_where('user_master',array('email'=>$email,'password'=>$password,'u_type'=>$type));
        return $query->row();
    }

    public function update_user_master($id,$data)
    {
        $this->db->where('u_id_pk',$id);
        return $this->db->update('user_master',$data);
    }

    public function delete_user_master($id)
    {
        $this ->db->where('u_id_pk',$id);
        return $this->db->delete('user_master');
    }
}
