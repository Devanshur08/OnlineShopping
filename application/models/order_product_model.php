<?php

class order_product_model extends CI_Model
{
    public function insert_order_product($data)
    {

        $this->db->insert('order_product', $data);
        return $this->db->insert_id();

    }

    public function showorder_product_data()
    {

        $this->db->select('o.*,u.u_name');
        $this->db->where('o.is_active', 1);
        $this->db->from('order_product o');
        $this->db->join('user_master u', 'u.u_id_pk=o.u_id_fk');
        $query = $this->db->get();
        return $query->result();

    }

    public function show_undelivered_order()
    {

        $this->db->select('o.*,u.u_name');
        $this->db->where('o.is_active', 1);
        $this->db->where('o.is_delivered', 0);
        $this->db->from('order_product o');
        $this->db->join('user_master u', 'u.u_id_pk=o.u_id_fk');
        $query = $this->db->get();
        return $query->result();

    }

    public function show_delivered_order()
    {

        $this->db->select('o.*,u.u_name');
        $this->db->where('o.is_active', 1);
        $this->db->where('o.is_delivered', 1);
        $this->db->from('order_product o');
        $this->db->join('user_master u', 'u.u_id_pk=o.u_id_fk');
        $query = $this->db->get();
        return $query->result();

    }

    public function recentorder_product_data()
    {

        $this->db->select('o.*,u.u_name');
        $this->db->where('o.is_active', 1);
        $this->db->from('order_product o');
        $this->db->join('user_master u', 'u.u_id_pk=o.u_id_fk');
        $this->db->order_by('o.added_on', 'DESC');
        $this->db->order_by('o.o_id', 'DESC');
        $this->db->limit('10');
        $query = $this->db->get();
        return $query->result();

    }

    public function order_product_data($id)
    {
        $querry = $this->db->get_where('order_product', array('o_id' => $id));
        return $querry->row_array();
    }

    public function user_order_data($id)
    {
        $querry = $this->db->get_where('order_product', array('u_id_fk' => $id));
        return $querry->result();
    }

    public function update_order_product($id, $data)
    {
        $this->db->where('o_id', $id);
        $this->db->update('order_product', $data);

    }

    public function delete_order_product($id)
    {
        $this->db->where('o_id', $id);
        $this->db->delete('order_product');
    }

    public function order_readwise_list($is_read)
    {
        $this->db->select('o.*,u.u_name');
        $this->db->where(array('o.is_active' => '1', 'is_read' => $is_read));
        $this->db->from('order_product o');
        $this->db->join('user_master u', 'u.u_id_pk=o.u_id_fk');
        $query = $this->db->get();
        return $query->result();
    }

    public function update_all_order($data)
    {
        $this->db->set('modified_on', 'NOW()', false);
        return $this->db->update('order_product', $data);
    }
}
