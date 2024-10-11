<?php

class product_master_model extends CI_Model
{
    public function insert_product_master($data,$data1)
    
    {
        $this->db->insert('product_master',$data);
        $data2['p_id_fk'] = $this->db->insert_id();
        foreach($data1 as $key => $val){
            $data2['s_id_fk'] = $key;
            $data2['quantity'] = $val;
            $this->db->insert('product_quantity_master',$data2);
        }
        return $data2['p_id_fk'];
    }

    public function showproduct_master_data()
    {
        $this->db->select('p.*,c.colour_name,m.m_name,pt.pt_name');
        $this->db->where('p.is_active',1);
        $this->db->from('product_master p');
        $this->db->join('colour c','p.colour_id_fk=c.colour_id_pk');
        $this->db->join('material m','p.m_id_fk=m.m_id_pk');
        $this->db->join('product_type pt','p.pt_id_fk=pt.pt_id_pk');
        $query = $this->db->get();
        return $query->result();

    }

    public function showproduct_type_data($id)
    {
        $this->db->select('p.*,c.colour_name,m.m_name,pt.pt_name,pi.pi_name');
        $this->db->where(array('pt_id_fk'=>$id,'p.is_active'=>1));
        $this->db->from('product_master p');
        $this->db->join('colour c','p.colour_id_fk=c.colour_id_pk');
        $this->db->join('material m','p.m_id_fk=m.m_id_pk');
        $this->db->join('product_type pt','p.pt_id_fk=pt.pt_id_pk');
        $this->db->join('product_image pi','p.p_id_pk=pi.p_id_fk');
        $this->db->group_by('p.p_id_pk');
        $query = $this->db->get();
        return $query->result();
    }

    public function showsingle_product_data($id)
    {
        $this->db->select('p.*,c.colour_name,m.m_name,pt.pt_name,pi.pi_name');
        $this->db->where(array('p_id_pk'=>$id,'p.is_active'=>1));
        $this->db->from('product_master p');
        $this->db->join('colour c','p.colour_id_fk=c.colour_id_pk');
        $this->db->join('material m','p.m_id_fk=m.m_id_pk');
        $this->db->join('product_type pt','p.pt_id_fk=pt.pt_id_pk');
        $this->db->join('product_image pi','p.p_id_pk=pi.p_id_fk');
        $query = $this->db->get();
        return $query->row();
    }

    public function product_master_data($id)
    {
        $querry = $this ->db->get_where('product_master',array('p_id_pk'=>$id,'is_active'=>1));
        return $querry->row();
    }

    

    public function update_product_master($id,$data)
    {
         $this ->db->where('p_id_pk',$id);
         $this->db->set('modified_on','NOW()',false);
         $this->db->update('product_master',$data);

    }
       
    public function delete_product_master($id)
    {
            $this ->db->where('p_id_pk',$id);
            $this->db->set('modified_on','NOW()',false);
            $this->db->set('is_active',0);
            $this->db->delete('product_master');
    }

    public function new_product_arrival()
    {
        $this->db->select('p.*,c.colour_name,m.m_name,pt.pt_name,i.pi_name');
        $this->db->where(array('p.is_active'=>1));
        $this->db->from('product_master p');
        $this->db->join('colour c','p.colour_id_fk=c.colour_id_pk');
        $this->db->join('material m','p.m_id_fk=m.m_id_pk');
        $this->db->join('product_type pt','p.pt_id_fk=pt.pt_id_pk');
        $this->db->join('product_image i ','p.p_id_pk=i.p_id_fk');
        $this->db->order_by('p.added_on','desc');
        $this->db->group_by('p.p_id_pk');
        $this->db->limit(7);
        $query = $this->db->get();
        //echo $this->db->last_query();die;
        return $query->result();
    }
}

