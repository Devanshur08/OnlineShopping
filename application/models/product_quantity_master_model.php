<?php

class product_quantity_master_model extends CI_Model
{
    public function insert_product_quantity_master($id, $data)
    {
        foreach ($data as $key => $val) {
            $data1['p_id_fk'] = $id;
            $data1['s_id_fk'] = $key;
            $data1['quantity'] = $val;
            $this->db->insert('product_quantity_master', $data1);
        }

        return $this->db->insert_id();
    }

    public function showproduct_quantity_master_data()
    {
        $query = $this->db->get('product_quantity_master');
        return $query->result();
    }

    public function product_quantity_master_data($id)
    {
        $querry = $this->db->get_where('product_quantity_master', array('p_q_id_pk' => $id));
        return $querry->row();
    }

    public function product_quantity_data($id)
    {
        $querry = $this->db->get_where('product_quantity_master', array('p_id_fk' => $id));
        return $querry->result();
    }

    public function update_product_quantity_master($id, $data)
    {
        foreach ($data as $key => $val) {
            $size_id = $key;
            $data1['quantity'] = $val;
            $this->db->where('p_id_fk', $id);
            $this->db->where('s_id_fk', $size_id);
            $this->db->update('product_quantity_master', $data1);
        }

        return;

    }

    public function delete_product_quantity_master($id)
    {
        $this->db->where('p_q_id_pk', $id);
        $this->db->delete('product_quantity_master');
    }

    public function getquantityy($odata)
    {
        //$query=$this->db->get_where('product_quantity_master',array('product_id_fk'=>$odata['product_id_fk'],'size_id_fk'=>$odata['size_id_fk'],'color_id_fk'=>$odata['color_id_fk']));
        $query = $this->db->get_where('product_quantity_master', array('p_id_fk' => $odata['p_id_fk'], 's_id_fk' => $odata['size_id_fk']));

        return $query->row_array();
    }

    public function updateindqty($id, $data)
    {
        $this->db->where('p_q_id_pk', $id);
        return $this->db->update('product_quantity_master', $data);
    }
}
