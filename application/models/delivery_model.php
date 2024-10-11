<?php

class delivery_model extends CI_Model
{
    public function insert_delivery($data){

        $this->db->insert('delivery',$data);
        return $this->db->insert_id();
        

    }

    public function showdelivery_data(){
        $query = $this->db->get('delivery');
        return $query->result();

    }

    public function delivery_data($id){
        $querry = $this ->db->get_where('delivery',array('d_id'=>$id));
        return $querry->row();
    }

    public function update_delivery($id,$data){
         $this ->db->where('d_id',$id);
         $this->db->update('delivery',$data);

        }
        public function delete_delivery($id){
            $this ->db->where('d_id',$id);
            $this->db->delete('delivery');
        }
    }
