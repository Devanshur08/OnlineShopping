<?php

class size_model extends CI_Model
{
    public function insert_size($data){

        $this->db->insert('size',$data);
        return $this->db->insert_id();
        

    }

    public function showsize_data(){
        $query = $this->db->get_where('size',array('is_active'=>1));
        return $query->result();

    }

    public function size_data($id){
        $querry = $this ->db->get_where('size',array('size_id_pk'=>$id,'is_active'=>1));
        return $querry->row();
    }

    public function update_size($id,$data){
         $this ->db->where('size_id_pk',$id);
         $this->db->set('modified_on','NOW()',false);
         $this->db->update('size',$data);

        }
        public function delete_size($id){
            $this ->db->where('size_id_pk',$id);
            $this->db->set('modified_on','NOW()',false);
            $this->db->set('is_active',0);
            $this->db->update('size');
        }
    }
