<?php

class contact_model extends CI_Model
{
    public function insert_contact($data)
    {

        $this->db->insert('contact', $data);
        return $this->db->insert_id();

    }

    public function showcontact_data()
    {
        $query = $this->db->get_where('contact', array('is_active'=>'1'));
        return $query->result();

    }

    public function contact_data($id)
    {
        $querry = $this->db->get_where('contact', array('contact_id' => $id));
        return $querry->row();
    }

    public function update_contact($id, $data)
    {
        $this->db->where('contact_id', $id);
        $this->db->set('modified_on', 'NOW()', FALSE);
        $this->db->update('contact', $data);

    }
    public function delete_contact($id)
    {
        $this->db->where('contact_id', $id);
        $this->db->set('is_active', 0);
        $this->db->set('modified_on', 'NOW()', FALSE);
        $this->db->update('contact');
    }

    public function contact_readwise_list($is_read)
    {
        $query = $this->db->get_where('contact', array('is_active'=>'1','is_read' => $is_read));
        return $query->result();
    }

    public function update_all_contact($data) {
        $this->db->set('modified_on', 'NOW()', FALSE);
        return $this->db->update('contact', $data);
    }

}
