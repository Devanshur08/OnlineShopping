<?php

class colour_model extends CI_Model
{
    public function insert_colour($data){

        $this->db->insert('colour',$data);
        return $this->db->insert_id();
        

    }

    public function showcolour_data(){
        $query = $this->db->get_where('colour',array('is_active'=>1));
        return $query->result();

    }

    public function colour_data($id){
        $querry = $this ->db->get_where('colour',array('colour_id_pk'=>$id,'is_active'=>1));
        return $querry->row();
    }

    public function update_colour($id,$data){
         $this ->db->where('colour_id_pk',$id);
         $this->db->set('modified_on','NOW()',false);
         $this->db->update('colour',$data);

        }
        public function delete_colour($id){
            $this ->db->where('colour_id_pk',$id);
            $this->db->set('modified_on','NOW()',false);
            $this->db->set('is_active',0);
            $this->db->update('colour');
        }
    }
