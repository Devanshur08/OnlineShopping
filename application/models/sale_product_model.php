<?php

class sale_product_model extends CI_Model
{
    public function insert_sale_product($data)
    {
        $this->db->insert('sale_product',$data);
        return $this->db->insert_id();
    }

    public function showsale_product_data()
    {
        $this->db->select('sp.*,sa.sale_name,p.p_name,sc.sale_c_name as category_name');
        $this->db->where('sp.is_active',1);
        $this->db->from('sale_product sp');
        $this->db->join('sale sa','sp.sale_id_fk=sa.sale_id_pk');
        $this->db->join('product_master p','sp.p_id_fk=p.p_id_pk');
        $this->db->join('sale_category sc','sp.sale_c_id_fk=sc.sale_c_id_pk');
        $query = $this->db->get();
        
    
        return $query->result();
    }

    public function sale_all_product_data($id)
    {
        $this->db->select('p.*,c.colour_name,m.m_name,pt.pt_name,pi.pi_name');
        $this->db->where(array('sp.is_active'=>'1','sp.sale_id_fk'=>$id));
        $this->db->from('sale_product sp');
        $this->db->join('product_master p','sp.p_id_fk=p.p_id_pk');
        $this->db->join('colour c','p.colour_id_fk=c.colour_id_pk');
        $this->db->join('material m','p.m_id_fk=m.m_id_pk');
        $this->db->join('product_type pt','p.pt_id_fk=pt.pt_id_pk');
        $this->db->join('product_image pi','p.p_id_pk=pi.p_id_fk');
        $this->db->group_by('p.p_id_pk');
        $query = $this->db->get();
        
    
        return $query->result();
    }

    public function sale_product_data($id)
    {
        $querry = $this ->db->get_where('sale_product',array('sale_p_id_pk'=>$id,'is_active'=>1));
        return $querry->row();
    }

    public function update_sale_product($id,$data)
    {
         $this ->db->where('sale_p_id_pk',$id);
         $this->db->set('modified_on','NOW()',false);
         $this->db->update('sale_product',$data);

    }
    public function delete_sale_product($id)
    {
            $this ->db->where('sale_p_id_pk',$id);
            $this->db->set('modified_on','NOW()',false);
            $this->db->set('is_active',0);
            $this->db->update('sale_product');
    }
}
