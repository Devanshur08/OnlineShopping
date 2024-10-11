<?php

class cart_model extends CI_Model
{
    public function insert_cart($data)
    {
        $this->db->insert('cart',$data);
        return $this->db->insert_id();
    }

    public function showcart_data()
    {
        $query = $this->db->get('cart');
        return $query->result();
    }

    public function cart_data($id)
    {
        $querry = $this ->db->get_where('cart',array('cart_id_pk'=>$id));
        return $querry->row();
    }   

    public function user_cart_data($id)
    {
        $querry = $this->db->get_where('cart',array('u_id_fk'=>$id));
        return $querry->row();
    }

    public function update_cart($id,$data)
    {
        $this ->db->where('cart_id_pk',$id);
        $this->db->update('cart',$data);

    }
    
    public function delete_cart($id)
    {
        $this->db->where('cart_id_pk',$id);
        $this->db->delete('cart');
    }

    public function checkcart($id)
    {
        $querry = $this->db->get_where('cart',array('u_id_fk'=>$id));
        return $querry->row();
    }

    public function checkcart_product($id)
    {
        $querry = $this->db->get_where('cart_product_master',array('cart_p_id_pk'=>$id));
        return $querry->row();
    }

    public function checkcart_product_data($id,$size)
    {
        $querry = $this->db->get_where('cart_product_master',array('p_id_fk'=>$id,'size_id_fk'=>$size));
        return $querry->row();
    }

    public function checkcart_id($id)
    {
        $querry = $this->db->get_where('cart',array('cart_id_pk'=>$id));
        return $querry->row();
    }

    public function add_to_cart($data,$cdata,$id)
    {
        $this->db->insert('cart_product_master',$data);
        $this->db->where('cart_id_pk',$id);
        $this->db->update('cart',$cdata);
    }
    public function cart_product($id)
    {
        $querry = $this->db->get_where('cart_product_master',array('cart_id_fk'=>$id));
        return $querry->result();
    }

    public function delete_cart_product($p_id)
    {
        $this->db->where('cart_p_id_pk',$p_id);
        $this->db->delete('cart_product_master');
    }

    public function update_cart_product($p_id,$data)
    {
        $this->db->where('cart_p_id_pk',$p_id);
        $this->db->update('cart_product_master',$data);
    }
}

