<?php

class extra_charge_model extends CI_Model
{
    public function insert_extra_charge($data){

        $this->db->insert('extra_charge',$data);
        return $this->db->insert_id();
        

    }

    public function showextra_charge_data(){
        $query = $this->db->get_where('extra_charge',array('is_active'=>1));
        return $query->result();

    }

    public function extra_charge_data($id){
        $querry = $this ->db->get_where('extra_charge',array('ec_id_pk'=>$id,'is_active'=>1));
        return $querry->row();
    }

    public function update_extra_charge($id,$data){
         $this ->db->where('ec_id_pk',$id);
         $this->db->set('modified_on','NOW()',false);
         $this->db->update('extra_charge',$data);

        }
        public function delete_extra_charge($id){
            $this ->db->where('ec_id_pk',$id);
            $this->db->set('modified_on','NOW()',false);
            $this->db->set('is_active',0);
            $this->db->update('extra_charge');
        }
    }
