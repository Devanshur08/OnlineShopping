<?php

class return_model extends CI_Model
{
    public function insert_return($data){

        $this->db->insert('return',$data);
        return $this->db->insert_id();
        

    }

    public function showreturn_data(){
        $query = $this->db->get('return');
        return $query->result();

    }

    public function return_data($id){
        $querry = $this ->db->get_where('return',array('return_id_pk'=>$id));
        return $querry->row();
    }

    public function update_return($id,$data){
         $this ->db->where('return_id_pk',$id);
         $this->db->update('return',$data);

        }
        public function delete_return($id){
            $this ->db->where('return_id_pk',$id);
            $this->db->delete('return');
        }
    }
