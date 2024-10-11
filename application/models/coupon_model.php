<?php

class coupon_model extends CI_Model
{
    public function insert_coupon($data)
    {

        $this->db->insert('coupon',$data);
        return $this->db->insert_id();
        

    }

    public function showcoupon_data()
    {
        $query = $this->db->get_where('coupon',array('is_active'=>1));
        return $query->result();

    }

    public function coupon_data($id)
    {
        $querry = $this ->db->get_where('coupon',array('coupon_id_pk'=>$id,'is_active'=>1));
        return $querry->row();
    }

    public function coupon_code_data($id)
    {
        $querry = $this ->db->get_where('coupon',array('coupon_name'=>$id,'is_active'=>1));
        return $querry->row();
    }

    public function update_coupon($id,$data)
    {
         $this ->db->where('coupon_id_pk',$id);
         $this->db->set('modified_on','NOW()',false);
         $this->db->update('coupon',$data);

    }
    public function delete_coupon($id)
    {
        $this ->db->where('coupon_id_pk',$id);
        $this->db->set('modified_on','NOW()',false);
        $this->db->set('is_active',0);
        $this->db->update('coupon');
    }
}

