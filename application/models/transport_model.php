<?php

class transport_model extends CI_Model
{
    public function insert_transport($data){

        $this->db->insert('transport',$data);
        return $this->db->insert_id();
        

    }

    public function showtransport_data(){
        $query = $this->db->get('transport');
        return $query->result();

    }

    public function transport_data($id){
        $querry = $this ->db->get_where('transport',array('t_id_pk'=>$id));
        return $querry->row();
    }

    public function update_transport($id,$data){
         $this ->db->where('t_id_pk',$id);
         $this->db->update('transport',$data);

        }
        public function delete_transport($id){
            $this ->db->where('t_id_pk',$id);
            $this->db->delete('transport');
        }
    }
